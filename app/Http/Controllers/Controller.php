<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Film;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard() {

        $films = Film::take(4)->get();

        $latestFilms = Film::take(4)->orderBy('release_date', 'ASC')->get();

        return view('dashboard')->with('films', $films)->with('latestFilms', $latestFilms);
    }

    public function logIn(Request $request)
    {
        $userName = $request->ValidatesRequests(['required|alpha_num']);
        $userPass = $request->validate(['required|min:8']);

        $user = User::where('name', '=', $userName)->where('password', '=', $userPass)->first();

        if ($user) {
            session(['user' => $user]);

            return view('profile.dashboard')->with('user', $user);
        }
    }


    public function logOut(Request $request)
    {
        if (session()->exists('user') && session('user')->id == $request->id) {
            session()->forget('user');

            return view('home');
        }
    }
}
