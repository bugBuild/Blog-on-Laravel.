<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\usersSimple;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Cookie;
class mainController extends Controller
{
    function indexPage(Request $request){
        $posts = DB::select('select * from posts');
        return view('index',['posts' => $posts]);
    }
    function loginPage(){
        return view('login');
    }
    function signupPage(){
        return view('signup');
    }
    function loginPost(Request $request){
        $password = DB::select('select * from users_simples WHERE username="'.$request->input('username').'"');
        if($password) {
            $checkPass = Hash::check($request->input('password'), $password[0]->password);

            if ($checkPass) {
                $cookie = Cookie::make('user', "'" . $request->input('username') . "'", 120);
                return redirect('/')->withCookie($cookie);
            } else {
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }
    function signupPost(Request $request){
        $this->validate($request, [
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:2|max:15'
        ]);
        $user = new usersSimple();

        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        $cookie = Cookie::make('user',"'".$request->input('username')."'", 120);

        return redirect('/')->withCookie($cookie);
    }
    //Posts
    function add(){
        return view('add');
    }
    function addPost(Request $request){
        $this->validate($request, [
            'title' => 'required|min:2|max:25',
            'subject' => 'required|min:10|max:35',
            'post' => 'required|min:10|max:500',
        ]);
        $post = new posts();

        $post->title = $request->input('title');
        $post->subject = $request->input('subject');
        $post->post = $request->input('post');

        $post->author = Cookie::get('user');

        $post->save();

        return redirect('/');
    }
    function signOut(){
        $cookie = Cookie::forget('user');
        return redirect('/')->withCookie($cookie);
    }
}
