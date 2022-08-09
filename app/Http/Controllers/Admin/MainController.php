<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Menu\MenuService;
use Auth;

class MainController extends Controller
{
        public function index(){
           return view('admin.home',[
            'title' =>'Trang Quản trị'
           ]);
        }


}
