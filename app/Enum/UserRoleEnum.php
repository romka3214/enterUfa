<?php

namespace App\Enum;

enum UserRoleEnum: int
{
    case USER = 0;
    case OWNER = 1;
    case MODERATOR = 2;
}