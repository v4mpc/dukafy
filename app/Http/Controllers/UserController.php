<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Http\Requests\StoreUser;
use Hash;
use Image;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        // $user->password=Hash::make($request->password);

        if($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($request->image)->resize(400, 400)->save($location);
                $user->image=$filename;
  
    }

    $user->save();

    Session::flash('success','User Saved');
    return redirect()->route('users.index');

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
        $user=User::findOrFail($id);
        return view('users.edit')->with('user',$user);
    }

    public function getPasswordForm($id)
    {
        $user=User::findOrFail($id);
        return view('users.password')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id)
    {
    //    dd($user);
$user=User::findOrFail($id);
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request->old_password, Auth::user()->password)) {
            
           
            $user->password=Hash::make($request->password);

            
            $user->save();
            Session::flash('success','Password Saved!');
            return redirect()->back();
        }

        Session::flash('error','Password entered does not match the old one!');
            return redirect()->back();

         
    }


    public function update(Request $request, User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        // $user->password=Hash::make($request->password);

        if($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($request->image)->resize(400, 400)->save($location);
                $user->image=$filename;
  
    }
    $user->save();

    Session::flash('success','User Saved!');
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return response()->json($user);

    }
}
