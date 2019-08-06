<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        return view('home',compact('users'));
    }
    public function users()
        {
            $users = User::all();
            $reports = Report::all();

            return view('users.users',compact('users','reports'));
        }


    public function show(User $user){

           return view('users.show',compact('user'));

    }

    public function destroy(User $user)
    {
        $user->delete();
        $user->userReports()->delete();

        return redirect('home');
    }
}
