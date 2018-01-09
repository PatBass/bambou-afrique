<?php

namespace UserBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */
class isPhoneNumber extends Constraint
{
    public $message = 'Le numéro de téléphone ne doit contenir que des caractères numériques avec ou sans séparation (-. ).';
}