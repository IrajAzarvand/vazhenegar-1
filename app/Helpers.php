<?php


use App\User;
use App\Order;

function SetUsersMode()
{
    $OnlineIds = (new App\Session)->GetOnlineUsersSession();
    User::whereNotIn('id', $OnlineIds)->update(['Mode' => 'OFF']);
    User::whereIn('id', $OnlineIds)->update(['Mode' => 'ON']);
    return back();
}

function OnlineUsers()
{
    SetUsersMode();
    return User::Where('Mode', 'ON')->count();
}

//Get all employment requests except management and customers id's and departments
function NewEmployment()
{
    return User::where('Status', 'P')
        ->whereNotIn('Department', ['1', '8'])
        ->whereNotIn('role_id', ['1', '11'])
        ->count();
}

//function for replace persian digits with english to save in db
//         because persian srting cannot validate in laravel
function per_digit_conv(string $per_digits)
{
    $result = "";
    $rep = [
        '۰',
        '۱',
        '۲',
        '۳',
        '۴',
        '۵',
        '۶',
        '۷',
        '۸',
        '۹',
    ];
    $en_digits = \range(0, 9);
    $result = \str_replace($rep, $en_digits, $per_digits);
    return $result;
}

//for admin dashboard badges in case of registering a new order by any user
function AllNewRegisteredOrders()
{
    return Order::where('StatusId',1)->get();
}

//for user dashboard badges in case of registering a new order
function UserRegisteredOrders($UserId)
{
    return Order::where('UserId',$UserId)
        ->where('StatusId',1)
        ->count();
}
