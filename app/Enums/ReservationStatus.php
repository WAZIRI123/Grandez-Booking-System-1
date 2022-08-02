<?php
namespace App\Enums;

enum ReservationStatus:string
{
    case Waiting = '1';
    case Confirmed ='2';
    case Rejected ='3';
}