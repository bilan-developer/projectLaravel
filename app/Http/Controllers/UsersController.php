<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        $cacheUser = [];
        foreach ($users as $user){
            $cacheUser[] = Cache::get($user->getTable(). '#' .$user->id);
        }
        dump($cacheUser);
        $auth = Auth::user();
        $user = Cache::get($auth->getTable(). '#' .$auth->id);
//        dump($user['user']);
//        $users = User::sampleUsers();
       // dump($user->id);
        return view('users.index',['user'=>$user]);

    }
}
