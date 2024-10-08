<?php

declare(strict_types=1);

namespace JMS\TranslationBundle\Tests\Translation\Extractor\File\Fixture;

use Symfony\Component\Validator\Context\ExecutionContext;

class MyEntity
{
    public function validateConstraintWithDefaultDomain(ExecutionContext $context)
    {
        $context
            ->buildViolation('entity.default')
            ->addViolation();
    }

    public function validateConstraintWithCustomDomain(ExecutionContext $context)
    {
        $context
            ->buildViolation('entity.custom-domain')
            ->setTranslationDomain('custom-domain')
            ->addViolation();
    }
}
