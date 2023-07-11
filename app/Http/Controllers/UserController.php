<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    //show all users
    public function index(){
        return view('users.index',[
            'users'=>User::all(),
        ]);
    }
    
    //show register form
    public function create()
    {
        return view('users.register');
    }

    //store user to database
    public function store(Request $request)
    {   
        //validate form
        $formFields = $request->validate([
            'name'=>'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password'=>'required|min:6'
        ]);

        //encrypt password
        $formFields['password'] = bcrypt($formFields['password']);
        
        //create user
        // User::create($formFiled);
        $user = User::create($formFields);

         // Login
        // auth()->login($user);
        
        return redirect('/users')->with('success','Registration new admin successful!');
    }

    //show login form
    public function login()
    {
        return view('users.login');
    }

    //authenticate user
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('success', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    //logout user
    public function logout(Request $request){
        auth()->logout();

        // request()->session()->invalidate(); //we can also use this, but no need the "Request $request" in the function
        // request()->session()->regenerateToken();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You are now logged out!');
    }

    //delete user
    public function destroy(User $user){
        $user->delete();
        return redirect('/users')->with('success','User deleted successfully!');
    }
}

