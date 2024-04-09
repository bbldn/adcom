<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\NativeDataAssetTypeEnum;

class DataAsset
{
    public function __construct(
        public string $value,
        public int|null $len = null,
        public NativeDataAssetTypeEnum|null $type = null,
        public mixed $ext = null,
    ) {
    }
}
