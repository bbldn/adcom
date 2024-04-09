<?php

namespace BBLDN\AdCOM\Placement;

use BBLDN\AdCOM\Enum\ExpandableDirectionEnum;

class DisplayFormat
{
    /**
     * @param list<ExpandableDirectionEnum>|null $expdir
     */
    public function __construct(
        public int|null $h = null,
        public int|null $w = null,
        public int|null $hratio = null,
        public int|null $wratio = null,
        public array|null $expdir = null,
        public mixed $ext = null,
    ) {
    }
}
