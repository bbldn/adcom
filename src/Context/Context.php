<?php

namespace BBLDN\AdCOM\Context;

class Context
{
    public function __construct(
        public App|null $app = null,
        public Dooh|null $dooh = null,
        public Regs|null $regs = null,
        public Site|null $site = null,
        public User|null $user = null,
        public Device|null $device = null,
        public Restrictions|null $restrictions = null,
    ) {
    }
}
