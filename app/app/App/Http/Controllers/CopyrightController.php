<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
____ ____ ____ ____ ___  ____ ____ ____ ____ ___  _    ____ ___  ____ __   _  _ ____ ___  
|_ _\|___\| __\|_ _\|  \ | __\|_ _\|   || __\| .\ || \ |_ _\| _\ |   || |  || |\| __\|  \ 
  || | /  | \__  || | . \| \__  || | . ||  ]_| .<_||_|\  || [__ \| . || |__||/ /|  ]_| . \
  |/ |/   |___/  |/ |/\_/|___/  |/ |___/|___/|___/|___/  |/ |___/|___/|___/|__/ |___/|___/
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
