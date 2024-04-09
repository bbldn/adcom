<?php

namespace BBLDN\AdCOM\Context;

class Data
{
    /**
     * @param list<Segment>|null $segment
     */
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public array|null $segment = null,
        public mixed $ext = null,
    ) {
    }
}
