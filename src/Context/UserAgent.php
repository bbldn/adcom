<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\UserAgentSourceEnum;

class UserAgent
{
    /**
     * @param list<BrandVersion>|null $browsers
     */
    public function __construct(
        public int|null $mobile = null,
        public string|null $model = null,
        public array|null $browsers = null,
        public string|null $bitness = null,
        public string|null $architecture = null,
        public BrandVersion|null $platform = null,
        public UserAgentSourceEnum|null $source = UserAgentSourceEnum::UNKNOWN,
        public mixed $ext = null,
    ) {
    }
}
