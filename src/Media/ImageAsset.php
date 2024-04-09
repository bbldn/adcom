<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\NativeImageAssetTypeEnum;

class ImageAsset
{
    public function __construct(
        public string $url,
        public int|null $h = null,
        public int|null $w = null,
        public NativeImageAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
