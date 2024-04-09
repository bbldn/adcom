<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\MediaRatingEnum;
use BBLDN\AdCOM\Enum\ContentContextEnum;
use BBLDN\AdCOM\Enum\CategoryTaxonomyEnum;
use BBLDN\AdCOM\Enum\ProductionQualityEnum;

class Content
{
    /**
     * @param list<Data>|null $data
     * @param list<string>|null $cat
     * @param list<string>|null $kwarray
     */
    public function __construct(
        public int|null $len = null,
        public int|null $live = null,
        public array|null $cat = null,
        public int|null $embed = null,
        public string|null $id = null,
        public array|null $data = null,
        public int|null $srcrel = null,
        public string|null $url = null,
        public int|null $episode = null,
        public string|null $isrc = null,
        public string|null $lang = null,
        public string|null $album = null,
        public string|null $genre = null,
        public string|null $langb = null,
        public string|null $title = null,
        public array|null $kwarray = null,
        public string|null $artist = null,
        public string|null $rating = null,
        public string|null $season = null,
        public string|null $series = null,
        public string|null $urating = null,
        public Channel|null $channel = null,
        public Network|null $network = null,
        public string|null $keywords = null,
        public Producer|null $producer = null,
        public MediaRatingEnum|null $mrating = null,
        public ContentContextEnum|null $context = null,
        public CategoryTaxonomyEnum|null $cattax = null,
        public ProductionQualityEnum|null $prodq = null,
        public mixed $ext = null,
    ) {
    }
}
