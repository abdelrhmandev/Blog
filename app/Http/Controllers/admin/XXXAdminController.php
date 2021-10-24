<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\User;
use App\Rules\MatchOldPassword;
use Hash;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;
class AdminController extends Controller
{
    public function index(){
    }

    /*
        $this->users->create($request->only('name', 'email', 'password')); // store
        $user = $this->users->findOrFail($id); // update
        $user->fill($request->only('name', 'email', 'password'))->save();
    */
     
}
