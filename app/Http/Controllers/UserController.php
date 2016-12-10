<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Food;

class UserController extends Controller
{
    //
    public function profile() {
    	return view('profile', array('user' => Auth::user(),
                                     'foods' => Food::all()));
    }

    public function update_avatar(Request $request) {
    	if($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->save( public_path('/uploads/avatars/' . $filename) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()));
    }
}
