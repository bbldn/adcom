<?php

namespace BBLDN\AdCOM\Context;

class User
{
    /**
     * @param list<Data>|null $data
     * @param list<string>|null $kwarray
     * @param list<ExtendedIds>|null $eids
     */
    public function __construct(
        public Geo|null $geo = null,
        public int|null $yob = null,
        public string|null $id = null,
        public array|null $data = null,
        public array|null $eids = null,
        public array|null $kwarray = null,
        public string|null $gender = null,
        public string|null $consent = null,
        public string|null $buyeruid = null,
        public string|null $keywords = null,
        public mixed $ext = null,
    ) {
    }
}
