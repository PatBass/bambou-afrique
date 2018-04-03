<?php
namespace AFMP\InvoiceBundle\Repositories;
use Doctrine\ORM\EntityRepository;

/**
 * Repository for Invoice
 * 
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class InvoiceRepository extends EntityRepository
{
    /**
     * Search invoice
     * @param array $data
     * @return ArrayCollection
     */
    public function search($data, $payed = false)
    {
        $qb = $this->createQueryBuilder('inv');
        $qb->select('inv', 'ln', 'clt', 'user', 'infos')
           ->leftJoin('inv.lines', 'ln')
           ->leftJoin('inv.client', 'clt')
           ->leftJoin('clt.users', 'user')
           ->leftJoin('user.infos', 'infos')
           ->where('inv.completpayment = :payed');
        
        $qb->setParameter('payed', (int) $payed);

        $qb->orderBy('inv.invoicedate', 'DESC')
           ->addOrderBy('inv.id', 'DESC');
        $query = $qb->getQuery();

        return $query->getResult();
    }

    /**
     * Count total of invoice
     * @return int
     */
    public function countTotalInvoices()
    {
        $qb = $this->createQueryBuilder('inv');
        $qb->select('COUNT(inv)')
           ->where('inv.number IS NOT NULL');
        $query = $qb->getQuery();

        return $query->getSingleScalarResult();
    }

    /**
     * Select draft invoice
     * @return Invoice
     */
    public function findDraftInvoice()
    {
        $qb = $this->createQueryBuilder('inv');
        $qb->select('inv')
           ->leftJoin('inv.lines', 'ln')
           ->leftJoin('inv.client', 'clt')
           ->leftJoin('clt.users', 'usr')
           ->where('ln IS NULL')
           ->andWhere('usr IS NULL')
           ->setMaxResults(1);
        $query = $qb->getQuery();

        return $query->getOneOrNullResult();
    }

    /**
     * Override findOneById
     * @param int $refinvoice
     * @return Invoice
     */
    public function findOneById($refinvoice)
    {
        $refinvoice = is_array($refinvoice) ? $refinvoice['id'] : $refinvoice;
        $qb = $this->createQueryBuilder('inv');
        $qb->select('inv', 'ln', 'clt', 'usr', 'cltadd', 'pay')
           ->leftJoin('inv.lines', 'ln')
           ->leftJoin('inv.client', 'clt')
           ->leftJoin('clt.users', 'usr')
           ->leftJoin('clt.address', 'cltadd')
           ->leftJoin('inv.payments', 'pay')
           ->where('inv.id = :refinvoice')
           ->setParameter('refinvoice', $refinvoice);
        $query = $qb->getQuery();

        return $query->getOneOrNullResult();
    }
}