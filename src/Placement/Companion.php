<?php

namespace BBLDN\AdCOM\Placement;

/**
 * @see https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#object--companion-
 */
class Companion
{
    /**
     * @param mixed $ext Optional vendor-specific extensions.
     * @param int|null $vcm Indicates the companion ad rendering mode relative to the associated video or audio ad, where 0 = concurrent, 1 = end-card. For a given placement, typically only one companion at most should be designated as an end card.
     * @param string|null $id Identifier of the companion ad; unique within this placement.
     * @param DisplayPlacement|null $display Display specification object representing the companion ad. Refer to Object: DisplayPlacement.
     */
    public function __construct(
        public int|null $vcm = null,
        public string|null $id = null,
        public DisplayPlacement|null $display = null,
        public mixed $ext = null,
    ) {
    }
}
