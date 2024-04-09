<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;

class App extends DistributionChannel
{
    /**
     * @param list<string>|null $cat
     * @param list<string>|null $kwarray
     * @param list<string>|null $pagecat
     * @param list<string>|null $sectcat
     */
    public function __construct(
        public string $id,
        public int|null $paid = 0,
        public array|null $cat = null,
        public string|null $ver = null,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public array|null $kwarray = null,
        public array|null $pagecat = null,
        public array|null $sectcat = null,
        public string|null $bundle = null,
        public string|null $domain = null,
        public int|null $privpolicy = null,
        public string|null $storeid = null,
        public Content|null $content = null,
        public string|null $keywords = null,
        public string|null $storeurl = null,
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
