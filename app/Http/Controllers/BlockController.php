<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BlockController extends Controller
{
    public function index( $name ){
        
        
        

        return view( 'partial.' . $name );
    }
}


