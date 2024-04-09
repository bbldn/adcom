<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\DOOHVenueTypeEnum;

class Dooh extends DistributionChannel
{
    public function __construct(
        public string $id,
        public int|null $dpi = null,
        public int|null $etime = null,
        public int|null $fixed = null,
        public string|null $name = null,
        public Publisher|null $pub = null,
        public Content|null $content = null,
        public DOOHVenueTypeEnum|null $venue = null,
        public mixed $ext = null,
    ) {
        parent::__construct(
            id: $id,
            pub: $pub,
            name: $name,
            content: $content,
        );
    }
}
