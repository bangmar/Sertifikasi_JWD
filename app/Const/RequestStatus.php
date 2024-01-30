<?php

namespace App\Enums;

enum RequestStatus: string
{
    case NOT_CONFIRMED = 'belum di verifikasi';
    case CONFIRMED = 'sudah di verifikasi';
}
