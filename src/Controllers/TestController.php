<?php

namespace TestPackage\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Facades\FileFacade;


class TestController extends Controller
{

    public function test(Request $request) {
        return view('TestPackage::test' , ['name' => "Test"]);
    }
}
