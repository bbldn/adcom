<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\MediaRatingEnum;
use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOM\Enum\CreativeAttributeEnum;

class Ad
{
    /**
     * @param list<string>|null $cat
     * @param list<string>|null $bundle
     * @param list<string>|null $adomain
     * @param list<CreativeAttributeEnum>|null $attr
     */
    public function __construct(
        public string $id,
        public int|null $init = null,
        public array|null $cat = null,
        public array|null $attr = null,
        public int|null $secure = null,
        public Audio|null $audio = null,
        public Audit|null $audit = null,
        public Video|null $video = null,
        public int|null $lastmod = null,
        public string|null $iurl = null,
        public string|null $lang = null,
        public array|null $bundle = null,
        public array|null $adomain = null,
        public Display|null $display = null,
        public MediaRatingEnum|null $mrating = null,
        public CategoryTaxonomyEnum|int|null $cattax = CategoryTaxonomyEnum::CONTENT_2_0,
        public mixed $ext = null,
    ) {
    }
}
