<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Validator;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = RegisterUser::orderBy("id","desc")->paginate(50);
        return view("ShowData", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("addUsers");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'    => 'required',
            'phone' => 'required|string|min:10',
            'description' => 'required',
            'role_id' => 'required'
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(['success'=> false, 'message'=> $error],400);
        }
        if($request->hasFile('photo')){
            if(file_exists(public_path("/uploads/users/".$request->photo))){
                unlink(public_path("/uploads/users/".$request->photo));
            }
        
            $imageName = 'users'.time().'.'.$request->photo->extension();
            $destinationPath = public_path('uploads/users/');
            $request->photo->move($destinationPath, $imageName);
        }else{
            $imageName = "";
        }
        $newEntery = new RegisterUser;
        $newEntery->name = $request->name;
        $newEntery->email = $request->email;
        $newEntery->phone = $request->phone;
        $newEntery->description = $request->description;
        $newEntery->role_id = $request->role_id;
        $newEntery->photo = $imageName;
        $newEntery->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterUser $registerUser, $id)
    {
        $data = RegisterUser::orderBy("id","desc")->paginate(50);
        return view("table", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterUser $registerUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterUser $registerUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterUser  $registerUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterUser $registerUser)
    {
        //
    }
}
