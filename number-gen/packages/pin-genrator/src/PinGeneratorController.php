<?php

namespace Packages\PinGenerator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinGenratorController extends Controller
{
    public function add($a)
    {
        echo $a * 2;
    }
}
