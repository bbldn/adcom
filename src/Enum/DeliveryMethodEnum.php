<?php

namespace BBLDN\AdCOM\Enum;

enum DeliveryMethodEnum: int
{
    case STREAMING = 1;

    case PROGRESSIVE = 2;

    case DOWNLOAD = 3;
}
