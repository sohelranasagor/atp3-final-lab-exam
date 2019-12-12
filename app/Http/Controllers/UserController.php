<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=$request->session()->get('user');
        $admin=User::find($user->id);
        return view('member.index')->with('user', $admin);
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
    public function show(Request $request)
    {
        $user=$request->session()->get('user');
        $member=User::find($user->id);
        return view('member.myProfile')->with('user', $member);
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
    public function update(Request $request)
    {
        $user=$request->session()->get('user');
        $validatedData = $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|max:10',
            'name' => 'required|string|max:30',
            'phn' => 'required|numeric|digits:11'
        ]);

        $member = User::find($user->id);
        $member->username = $request->username;
        $member->password = $request->password;
        $member->name = $request->name;
        $member->cell = $request->phn;
        if($member->save())
        {
            return redirect()->route('member.index');
        }
    }

    public function delete(Request $request)
    {
        $user=$request->session()->get('user');
        $member=User::find($user->id);
        return view('member.deleteProfile')->with('user', $member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user=$request->session()->get('user');
        $member=User::find($user->id);
        if($member->delete())
        {
            return redirect()->route('login.index');
        }
    }
}
