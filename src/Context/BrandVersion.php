<?php

namespace BBLDN\AdCOM\Context;

class BrandVersion
{
    /**
     * @param list<string>|null $version
     */
    public function __construct(
        public string|null $brand = null,
        public array|null $version = null,
        public mixed $ext = null,
    ) {
    }
}
