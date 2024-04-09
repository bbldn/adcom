<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\DeviceTypeEnum;
use BBLDN\AdCOM\Enum\ConnectionTypeEnum;
use BBLDN\AdCOM\Enum\OperatingSystemEnum;

class Device
{
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $js = null,
        public Geo|null $geo = null,
        public int|null $dnt = null,
        public int|null $lmt = null,
        public int|null $ppi = null,
        public int|null $iptr = null,
        public string|null $ip = null,
        public string|null $ua = null,
        public string|null $hwv = null,
        public string|null $ifa = null,
        public string|null $osv = null,
        public string|null $xff = null,
        public string|null $ipv6 = null,
        public string|null $lang = null,
        public string|null $make = null,
        public int|null $geofetch = null,
        public string|null $langb = null,
        public string|null $model = null,
        public UserAgent|null $sua = null,
        public float|null $pxratio = null,
        public string|null $mccmnc = null,
        public string|null $carrier = null,
        public string|null $mccmncsim = null,
        public DeviceTypeEnum|null $type = null,
        public OperatingSystemEnum|null $os = null,
        public ConnectionTypeEnum|null $contype = null,
        public mixed $ext = null,
    ) {
    }
}
