<?php

namespace BBLDN\AdCOM\Placement;

class Placement
{
    /**
     * @param list<string>|null $wlang
     */
    public function __construct(
        public int|null $ssai = 0,
        public int|null $reward = 0,
        public int|null $admx = null,
        public int|null $curlx = null,
        public int|null $secure = null,
        public string|null $sdk = null,
        public array|null $wlang = null,
        public string|null $tagid = null,
        public string|null $sdkver = null,
        public AudioPlacement|null $audio = null,
        public VideoPlacement|null $video = null,
        public DisplayPlacement|null $display = null,
        public mixed $ext = null,
    ) {
    }
}
