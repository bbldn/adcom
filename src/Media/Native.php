<?php

namespace BBLDN\AdCOM\Media;

class Native
{
    /**
     * @param list<Asset>|null $asset
     */
    public function __construct(
        public array|null $asset = null,
        public LinkAsset|null $link = null,
        public mixed $ext = null,
    ) {
    }
}
