<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOM\Enum\CreativeAttributeEnum;

class Restrictions
{
    /**
     * @param list<string>|null $badv
     * @param list<string>|null $bapp
     * @param list<string>|null $bcat
     * @param list<CreativeAttributeEnum>|null $battr
     */
    public function __construct(
        public array|null $badv = null,
        public array|null $bapp = null,
        public array|null $bcat = null,
        public array|null $battr = null,
        public CategoryTaxonomyEnum|null $cattax = CategoryTaxonomyEnum::CONTENT_2_0,
        public mixed $ext = null,
    ) {
    }
}
