<?php
namespace App\Enums;


enum OrderStatusEnum: string
{
case NEW_ORDER = 'new-order';
case IN_PROCESS = 'in-process';
case FINISH = 'finish';

}

?>
