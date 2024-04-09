<?php

namespace BBLDN\AdCOM\Context;

abstract class DistributionChannel
{
    public function __construct(
        public string $id,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public Content|null $content = null,
    ) {
    }
}
