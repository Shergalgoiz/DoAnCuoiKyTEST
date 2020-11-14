<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
// session_start(); framwork da ho ko dc goi cho tang thap vi cai nay cua php. 

class AdminController extends Controller
{

    public function Adminidx() {
        return view('admin.admin_login');
    }

    public function show_Dashboard() {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = MD5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {            
            session(['admin_name'=> $result->admin_name]);
            session(['admin_id'=> $result->admin_id]);
            return Redirect::to('/dashboard');
        } else {
            $value = $request->session()->get('message', 'an thit heo nha con');
            // session(['message' => 'an thit heo nha con']);
            return Redirect::to('/admin_login');
        }

    }

    public function logout() {
        echo 'dang xuat thanh cong';
    }
}


