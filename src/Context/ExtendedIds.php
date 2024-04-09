<?php

namespace BBLDN\AdCOM\Context;

class ExtendedIds
{
    /**
     * @param list<ExtendedUid>|null $uids
     */
    public function __construct(
        public array|null $uids = null,
        public string|null $source = null,
        public mixed $ext = null,
    ) {
    }
}
