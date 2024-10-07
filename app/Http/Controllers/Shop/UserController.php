<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Hash;
use Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $users = User::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $users = $users->where('name', 'like', '%'.$sort_search.'%');
        }
        $users = $users->get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        // $user = User::create([
        //     'name' => $request['name'],
        //     'business_name' => $request['business_name'],
        //     'address' => $request['address'],
        //     'phone' => $request['phone'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        $user=new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->business_name = $request->business_name;
        $user->password = Hash::make($request->password);
        $user->save();

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->save();

        $user->email_verified_at = date('Y-m-d H:m:s');
        $user->role_id = 2;
       

        if($user->save()){
            Toastr::success('Site Setting has been Saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
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
        $data = User::findorFail(decrypt($id));
        return view('admin.user.edit',compact('data'));
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->business_name = $request->business_name;
        if($request->password){
            $user->password = Hash::make($request->password);
        }


        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->save();

        $user->email_verified_at = date('Y-m-d H:m:s');
        $user->update();
        if($user->update()){
            Toastr::success('Site Setting has been Update successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
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
