<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\ApiFrameworkEnum;
use BBLDN\AdCOM\Enum\CreativeSubtypeAudioVideoEnum;

class Video
{
    /**
     * @param list<string>|null $mime
     * @param list<ApiFrameworkEnum>|null $api
     */
    public function __construct(
        public int|null $dur = null,
        public array|null $api = null,
        public array|null $mime = null,
        public string|null $adm = null,
        public string|null $curl = null,
        public CreativeSubtypeAudioVideoEnum|null $ctype = null,
        public mixed $ext = null,
    ) {
    }
}
