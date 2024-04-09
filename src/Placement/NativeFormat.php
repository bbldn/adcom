<?php

namespace BBLDN\AdCOM\Placement;

class NativeFormat
{
    /**
     * @param list<AssetFormat> $asset
     * @param mixed|null $ext
     */
    public function __construct(
        public array $asset,
        public mixed $ext = null,
    ) {
    }
}
