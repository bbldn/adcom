<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\EventTypeEnum;
use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\EventTrackingMethodEnum;

class EventSpec
{
    /**
     * @param list<string>|null $jstrk
     * @param list<string>|null $pxtrk
     * @param list<ApiFrameworkEnum>|null $api
     * @param list<EventTrackingMethodEnum>|null $method
     */
    public function __construct(
        public EventTypeEnum $type,
        public int|null $wjs = 1,
        public int|null $wpx = 1,
        public array|null $api = null,
        public array|null $jstrk = null,
        public array|null $pxtrk = null,
        public array|null $method = null,
        public mixed $ext = null,
    ) {
    }
}
