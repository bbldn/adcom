<?php

namespace BBLDN\AdCOM\Enum;

enum SlotPositionPodEnum: int
{
    case LAST = -1;

    case ANY = 0;

    case FIRST = 1;

    case FIRST_OR_LAST = 2;
}
