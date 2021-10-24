<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
class HomeController extends Controller
{
    public function index(){
        $page_title = 'test';
        return view('admin.dashboard',['page_title'=>$page_title]);
    }

     
}
