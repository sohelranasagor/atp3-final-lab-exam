<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Carcategory;
use App\Car;

class AdminController extends Controller
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
        return view('admin.index')->with('user', $admin);
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
        $admin=User::find($user->id);
        return view('admin.myProfile')->with('user', $admin);
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

        $admin = User::find($user->id);
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->name = $request->name;
        $admin->cell = $request->phn;
        if($admin->save())
        {
            return redirect()->route('admin.index');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('admin.deleteMember')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            return redirect()->route('admin.memberList');
        }
    }

    public function memberList()
    {
        $users = User::where('type','member')->get();
        return view('admin.memberList')->with('users', $users);
    }

    public function addCarCategory()
    {
        return view('admin.addCarCategory');
    }
    public function storeCarCategory(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:50'
        ]);

        $category = new Carcategory();
        $category->category = $request->category;
        if($category->save())
        {
            return redirect()->route('admin.index');
        }
    }

    public function addCars()
    {
        $category = Carcategory::all();
        return view('admin.addCars')->with('category', $category);
    }

    public function storeCars(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:50',
            'carname' => 'required|string|max:50',
            'price' => 'required|numeric'
        ]);

        $car = new Car();
        $car->category = $request->category;
        $car->cname = $request->carname;
        $car->price = $request->price;
        if($car->save())
        {
            return redirect()->route('admin.carList');
        }
    }

    public function carList()
    {
        $cars = Car::All();
        return view('admin.carList')->with('cars', $cars);
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);
        return view('admin.deleteCar')->with('car', $car);
    }
    public function destroyCar($id)
    {
        $car = Car::find($id);
        if($car->delete())
        {
            return redirect()->route('admin.carList');
        }
    }

    public function CarDetails($id)
    {
        $car = Car::find($id);
        return view('admin.CarDetails')->with('car', $car);
    }

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('admin.editCar')->with('car', $car);
    }

    public function updateCar($id, Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:50',
            'carname' => 'required|string|max:50',
            'price' => 'required|numeric'
        ]);

        $car = Car::find($id);
        $car->category = $request->category;
        $car->cname = $request->carname;
        $car->price = $request->price;
        if($car->save())
        {
            return redirect()->route('admin.carList');
        }
    }
}
