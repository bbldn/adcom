<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\LocationTypeEnum;
use BBLDN\AdCOM\Enum\IPLocationServiceEnum;

class Geo
{
    public function __construct(
        public float|null $lat = null,
        public float|null $lon = null,
        public int|null $accur = null,
        public string|null $zip = null,
        public int|null $lastfix = null,
        public string|null $city = null,
        public string|null $metro = null,
        public int|null $utcoffset = null,
        public string|null $region = null,
        public string|null $country = null,
        public LocationTypeEnum|null $type = null,
        public IPLocationServiceEnum|null $ipserv = null,
        public mixed $ext = null,
    ) {
    }
}
