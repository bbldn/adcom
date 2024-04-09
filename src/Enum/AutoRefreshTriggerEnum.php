<?php

namespace BBLDN\AdCOM\Enum;

enum AutoRefreshTriggerEnum: int
{
    case UNKNOWN = 0;

    case USER_ACTION = 1;

    case EVENT = 2;

    case TIME = 3;
}
