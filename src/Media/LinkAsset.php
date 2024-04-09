<?php

namespace BBLDN\AdCOM\Media;

class LinkAsset
{
    /**
     * @param list<string>|null $trkr
     */
    public function __construct(
        public string $url,
        public array|null $trkr = null,
        public string|null $urlfb = null,
        public mixed $ext = null,
    ) {
    }
}
