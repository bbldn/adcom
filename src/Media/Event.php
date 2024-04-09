<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\EventTypeEnum;
use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\EventTrackingMethodEnum;

class Event
{
    /**
     * @param list<ApiFrameworkEnum>|null $api
     * @param array<string, mixed>|null $cdata
     */
    public function __construct(
        public string $url,
        public EventTypeEnum $type,
        public EventTrackingMethodEnum $method,
        public array|null $api = null,
        public array|null $cdata = null,
        public mixed $ext = null,
    ) {
    }
}
