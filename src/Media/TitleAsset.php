<?php

namespace BBLDN\AdCOM\Media;

class TitleAsset
{
    public function __construct(
        public string $text,
        public int|null $len = null,
        public mixed $ext = null,
    ) {
    }
}
