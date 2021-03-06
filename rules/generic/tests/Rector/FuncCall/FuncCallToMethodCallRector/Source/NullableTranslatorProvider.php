<?php

declare(strict_types=1);

namespace Rector\Generic\Tests\Rector\FuncCall\FuncCallToMethodCallRector\Source;

abstract class NullableTranslatorProvider
{
    private $translator;

    public function getTranslator(): ?SomeTranslator
    {
        return $this->translator;
    }
}
