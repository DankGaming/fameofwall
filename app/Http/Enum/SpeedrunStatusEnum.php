<?php


namespace App\Http\Enum;


class SpeedrunStatusEnum
{
    public const UPLOADED = 1;
    public const AWAITING_REVIEW = 2;
    public const FEEDBACK_SUBMITTED = 3;
    public const ACCEPTED = 4;
    public const DENIED = 5;
    public const HIDDEN = 6;
}