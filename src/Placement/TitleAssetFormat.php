<?php

namespace BBLDN\AdCOM\Placement;

class TitleAssetFormat
{
    public function __construct(
        public int $len,
        public mixed $ext = null,
    ) {
    }
}
