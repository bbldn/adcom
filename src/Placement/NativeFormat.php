<?php

namespace BBLDN\AdCOM\Placement;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--nativeformat-
 */
class NativeFormat
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param list<AssetFormat> $asset Array of objects that specify the set of native assets and their permitted formats. Refer to Object: AssetFormat.
     */
    public function __construct(
        public array $asset,
        public mixed $ext = null,
    ) {
    }
}
