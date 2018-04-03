<?php
namespace AFMP\InvoiceBundle\Repositories;
use Doctrine\ORM\EntityRepository;

/**
 * Payment repository
 *
 * @author Mikael SERREAU <mikael.serreau@gmail.com>
 */
class PaymentRepository extends EntityRepository
{
    /**
     * Search payment for compta
     * @param \DateTime $d1
     * @param \DateTime $d2
     * @param string    $query
     * @return array
     */
    public function search($d1, $d2, $query)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p', 'inv', 'ln', 'clt')
           ->join('p.invoice', 'inv')
           ->join('inv.lines', 'ln')
           ->leftJoin('inv.client', 'clt')
           ->where('p.paymentdate BETWEEN :d1 AND :d2')
           ->setParameters(array(
                'd1' => $d1->format('Y-m-d'),
                'd2' => $d2->format('Y-m-d')
           ));
        
        if ($query) {
            $or = $qb->expr()->orX();
            $or->add($qb->expr()->like('clt.firstname', ':query_right'));
            $or->add($qb->expr()->like('clt.lastname', ':query_right'));
            $or->add($qb->expr()->like('inv.number', ':query_left'));
            $or->add($qb->expr()->like('p.identifier', ':query'));
            $qb->setParameter('query_right', $query.'%');
            $qb->setParameter('query_left', '%'.$query);
            $qb->setParameter('query', $query);

            $qb->andWhere($or);
        }

        $qb->orderBy('p.paymentdate', 'DESC')
           ->addOrderBy('p.id', 'DESC');
        $query = $qb->getQuery();

        return $query->getResult();
    }
}