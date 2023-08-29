<?php
 
namespace App\Http\Controllers;
 
use App\Jobs\NewUserWelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    public function create(Request $request)
    {
        // validate your request
 
        // create a user
        $user = User::create([
            "name"=> "smita11",
            "email" => "smita11.mind2web@gmail.com",
            'password' => bcrypt('123456')
            // other fields
        ]);
 
        // dispatch your queue job
        dispatch(new NewUserWelcomeMail($user));
 
        // return your response
    }
}