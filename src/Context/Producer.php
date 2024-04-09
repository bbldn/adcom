<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;

class Producer
{
    /**
     * @param list<string>|null $cat
     */
    public function __construct(
        public array|null $cat = null,
        public string|null $id = null,
        public string|null $name = null,
        public string|null $domain = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public mixed $ext = null,
    ) {
    }
}
