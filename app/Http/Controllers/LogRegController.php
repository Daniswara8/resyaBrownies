<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\View;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




class LogRegController extends Controller 
{
    public function indexRegister()
    {
       return view('register.register');
    }
}


?>