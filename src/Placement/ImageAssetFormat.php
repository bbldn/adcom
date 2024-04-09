<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\NativeImageAssetTypeEnum;

class ImageAssetFormat
{
    /**
     * @param list<string>|null $mime
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $hmin = null,
        public int|null $wmin = null,
        public array|null $mime = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public NativeImageAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
