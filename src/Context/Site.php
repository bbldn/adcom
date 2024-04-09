<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;

class Site extends DistributionChannel
{
    /**
     * @param list<string>|null $cat
     * @param list<string>|null $kwarray
     * @param list<string>|null $pagecat
     * @param list<string>|null $sectcat
     */
    public function __construct(
        public string $id,
        public int|null $amp = null,
        public array|null $cat = null,
        public int|null $mobile = null,
        public string|null $ref = null,
        public string|null $name = null,
        public string|null $page = null,
        public Publisher|null $pub = null,
        public array|null $kwarray = null,
        public array|null $pagecat = null,
        public array|null $sectcat = null,
        public string|null $domain = null,
        public string|null $search = null,
        public int|null $privpolicy = null,
        public Content|null $content = null,
        public string|null $keywords = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public mixed $ext = null,
    ) {
        parent::__construct(
            id: $id,
            pub: $pub,
            name: $name,
            content: $content,
        );
    }
}
