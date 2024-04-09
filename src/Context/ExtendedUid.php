<?php

namespace BBLDN\AdCOM\Context;

use BBLDN\AdCOM\Enum\AgentTypeEnum;

class ExtendedUid
{
    public function __construct(
        public string|null $id = null,
        public AgentTypeEnum|null $atype = null,
        public mixed $ext = null,
    ) {
    }
}
