<?php

namespace BBLDN\AdCOM\Context;

class Segment
{
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $value = null,
        public mixed $ext = null,
    ) {
    }
}
