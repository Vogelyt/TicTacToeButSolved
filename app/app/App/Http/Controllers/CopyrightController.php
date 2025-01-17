<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
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
