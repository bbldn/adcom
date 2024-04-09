<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\NativeDataAssetTypeEnum;

class DataAssetFormat
{
    public function __construct(
        public NativeDataAssetTypeEnum $type,
        public int|null $len = null,
        public mixed $ext = null,
    ) {
    }
}
