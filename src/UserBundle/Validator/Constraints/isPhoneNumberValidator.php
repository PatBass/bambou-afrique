<?php

namespace UserBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class isPhoneNumberValidator extends ConstraintValidator
{
	public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^0[1-678]([-. ]?\d{2}){4}$/', $value, $matches)) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}