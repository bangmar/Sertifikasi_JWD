<?php

namespace App\Enums;

enum FellowshipOptions: string
{
    case NOT_CONFIRMED = 'belum di verifikasi';
    case CONFIRMED = 'sudah di verifikasi';
}