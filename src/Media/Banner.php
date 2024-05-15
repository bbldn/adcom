<?php

namespace BBLDN\AdCOM\Media;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--banner-
 */
class Banner
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param string $img A URL that will return the image.
     * @param LinkAsset|null $link Destination link if the image is activated (e.g., clicked); not applicable in some contexts (e.g., DOOH) and its inclusion does not guarantee it will be supported. Refer to Object: LinkAsset.
     */
    public function __construct(
        public string $img,
        public LinkAsset|null $link = null,
        public mixed $ext = null,
    ) {
    }
}
