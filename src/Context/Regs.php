<?php

namespace BBLDN\AdCOM\Context;

class Regs
{
    public function __construct(
        public int|null $gdpr = null,
        public int|null $coppa = null,
        public mixed $ext = null,
    ) {
    }
}
