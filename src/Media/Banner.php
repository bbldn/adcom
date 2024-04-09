<?php

namespace BBLDN\AdCOM\Media;

class Banner
{
    public function __construct(
        public string $img,
        public LinkAsset|null $link = null,
        public mixed $ext = null,
    ) {
    }
}
