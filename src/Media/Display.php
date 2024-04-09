<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\CreativeSubtypeDisplayEnum;

class Display
{
    /**
     * @param list<Event> $event
     * @param list<ApiFrameworkEnum>|null $api
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public array|null $api = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public string|null $adm = null,
        public array|null $event = null,
        public string|null $curl = null,
        public string|null $mime = null,
        public string|null $priv = null,
        public Banner|null $banner = null,
        public Native|null $native = null,
        public CreativeSubtypeDisplayEnum|null $ctype = null,
        public mixed $ext = null,
    ) {
    }
}
