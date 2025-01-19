<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
                                                                               
 _____ _     _____         _____         _____     _   _____     _           _ 
|_   _|_|___|_   _|___ ___|_   _|___ ___| __  |_ _| |_|   __|___| |_ _ ___ _| |
  | | | |  _| | | | .'|  _| | | | . | -_| __ -| | |  _|__   | . | | | | -_| . |
  |_| |_|___| |_| |__,|___| |_| |___|___|_____|___|_| |_____|___|_|\_/|___|___|
                                                                               
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
  ____         __      __              _       _   
 |  _ \        \ \    / /             | |     | |  
 | |_) |_   _   \ \  / /__   __ _  ___| |_   _| |_ 
 |  _ <| | | |   \ \/ / _ \ / _` |/ _ \ | | | | __|
 | |_) | |_| |    \  / (_) | (_| |  __/ | |_| | |_ 
 |____/ \__, |     \/ \___/ \__, |\___|_|\__, |\__|
         __/ |               __/ |        __/ |    
        |___/               |___/        |___/     
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
