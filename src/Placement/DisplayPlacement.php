<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\SizeUnitEnum;
use BBLDN\AdCOM\Enum\ClickTypeEnum;
use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\PlacementPositionEnum;
use BBLDN\AdCOM\Enum\DisplayContextTypeEnum;
use BBLDN\AdCOM\Enum\DisplayPlacementTypeEnum;
use BBLDN\AdCOM\Enum\CreativeSubtypeDisplayEnum;

class DisplayPlacement
{
    /**
     * @param list<string>|null $mime
     * @param list<string>|null $ifrbust
     * @param list<EventSpec>|null $event
     * @param list<ApiFrameworkEnum>|null $api
     * @param list<DisplayFormat>|null $displayfmt
     * @param list<CreativeSubtypeDisplayEnum>|null $ctype
     */
    public function __construct(
        public int|null $h = null,
        public int|null $priv = 0,
        public int|null $w = null,
        public int|null $instl = 0,
        public array|null $api = null,
        public array|null $mime = null,
        public int|null $ampren = null,
        public array|null $ctype = null,
        public array|null $event = null,
        public int|null $topframe = null,
        public array|null $ifrbust = null,
        public array|null $displayfmt = null,
        public NativeFormat|null $nativefmt = null,
        public PlacementPositionEnum|null $pos = null,
        public DisplayContextTypeEnum|null $context = null,
        public DisplayPlacementTypeEnum|null $ptype = null,
        public SizeUnitEnum|null $unit = SizeUnitEnum::DIPS,
        public ClickTypeEnum|null $clktype = ClickTypeEnum::CLICKABLE_UNKNOWN,
        public mixed $ext = null,
    ) {
    }
}
