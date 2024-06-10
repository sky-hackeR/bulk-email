<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use SweetAlert;
use Mail;
use Alert;
use Log;
use Carbon\Carbon;

use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function index(){
        $admin = Admin::first();
        return view('admin.home',[
            'admin' => $admin
        ]);
    }
}