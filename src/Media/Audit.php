<?php

namespace BBLDN\AdCOM\Media;

use BBLDN\AdCOM\Enum\AuditStatusCodeEnum;

class Audit
{
    /**
     * @param list<string>|null $feedback
     */
    public function __construct(
        public int|null $init = null,
        public int|null $lastmod = null,
        public array|null $feedback = null,
        public AuditStatusCodeEnum|null $status = null,
        public mixed $ext = null,
        public mixed $corr = null,
    ) {
    }
}
