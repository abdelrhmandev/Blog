<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$banner=Banner::orderBy('id','DESC')->paginate(10);
        // return view('admin.banner.index')->with('banners',$banner);

        return view('admin.banners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.banners.create');
    }


    public function store(Request $request){
    }

    public function show($id){
        /*
        */
    }
    public function edit($id){
        return view('admin.banners.edit');
    }

    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
}
