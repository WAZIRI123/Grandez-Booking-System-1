<?php
namespace App\Enums;

enum ReservationStatus:string
{
    case Waiting = 'waiting';
    case Confirmed ='confirmed';
    case Rejected ='rejected';
}