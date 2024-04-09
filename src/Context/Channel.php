<?php

namespace BBLDN\AdCOM\Context;

class Channel
{
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $domain = null,
        public mixed $ext = null,
    ) {
    }
}
