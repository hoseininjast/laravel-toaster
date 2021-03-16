<?php

namespace  hoseininjast\toaster\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class ToasterController extends Controller
{
    /**
     * Create Toast.
     *
     * @param string $title
     * @param string $type
     * @param string $message
     * @author Hosein <hoseinfordev@gmail.com>
     */

    private static function SetToast($title = '', $type = null, $message = null)
    {
        Session::put('Toast', "toastr['{$type}']('{$message}', '{$title}')");

    }

    public static function CreateToast($title  , $type = 'success' , $message = null){
        self::SetToast($title , $type , $message);
    }
}
