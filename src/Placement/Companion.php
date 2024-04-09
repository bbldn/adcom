<?php

namespace BBLDN\AdCOM\Placement;

class Companion
{
    public function __construct(
        public int|null $vcm = null,
        public string|null $id = null,
        public DisplayPlacement|null $display = null,
        public mixed $ext = null,
    ) {
    }
}
