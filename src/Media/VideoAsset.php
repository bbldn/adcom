<?php

namespace BBLDN\AdCOM\Media;

class VideoAsset
{
    public function __construct(
        public string $adm,
        public string $curl,
        public mixed $ext = null,
    ) {
    }
}
