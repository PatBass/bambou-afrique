<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 02/06/18
 * Time: 12:17
 */

namespace MainBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;

class GetReference
{
    public function __construct($securityContext, $entityManager)
    {
        $this->securityContext = $securityContext;
        $this->em = $entityManager;
    }

    public function reference()
    {
        $reference = $this->em->getRepository('MainBundle:Commande')->findOneBy(array("valider" => 1), array('id'=>'desc'), 1, 1);

        if (!$reference) {
            return 1;
        } else {
            return $reference->getReference() + 1;
        }
    }
}