<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Socialite;

use App\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FacebookController extends Controller
{
	public function redirect()
	{
		return Socialite::driver('facebook')->redirect();
	}

	public function callback()
	{

    // jika user masih login lempar ke home
		if (Auth::check()) {
			return redirect('/home');
		}

		$oauthUser = Socialite::driver('facebook')->stateless()->user();

		// return response()->json(['oauthUser'=>$oauthUser]);

		$user = User::where('email', $oauthUser->email)
		->orWhere('email_facebook', $oauthUser->email)
		->first();

		if ($user) {
			Auth::login($user, true);
		}

		if (Auth::check()) {
			return redirect('/home');
		} else {
			return redirect('/login?facebook=false');
		}
	}
}