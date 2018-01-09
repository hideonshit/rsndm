<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	return view('Admin/index');
    }

    public function tableBasic(){
    	return view('Admin/table_basic');
    }

    public function tableComplete(){
    	return view('Admin/table_complete');
    }

    public function chartLine(){
    	return view('Admin/chart_line');
    }

    public function chartColumnar(){
    	return view('Admin/chart_columnar');
    }

    public function chartPie(){
    	return view('Admin/chart_pie');
    }

    public function formBasic(){
    	return view('Admin/form_basic');
    }

    public function formValidate(){
    	return view('Admin/form_validate');
    }

    public function cinema(){
        return view('Admin/cinema');
    }
}
