<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }
        public function create()
    {
        return view('admin.posts.create');
    }
}
