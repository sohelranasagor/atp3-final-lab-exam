<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
		$validatedData = $req->validate([
			'username' => 'required|max:30',
			'password' => 'required|max:10'
		]);
		$user = User::where('username', $req->username)
					->where('password', $req->password)
                    ->first();
        // dd($user->type);
        if($user)
        {
            if($user->type == "admin")
            {
                $req->session()->put('user', $user);
                return redirect()->route('admin.index');
            }
            else if($user->type == "member")
            {
                $req->session()->put('user', $user);
                return redirect()->route('member.index');
            }
            else
            {
                return redirect()->route('login.index');
            }
        }
        else
        {
            $req->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
