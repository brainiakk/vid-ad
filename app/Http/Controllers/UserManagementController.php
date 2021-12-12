<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserManagementController extends Controller
{
    //
    public function allUser()
    {
        $users = User::all();
        return view('user-management', compact('users'));
    }
    public function create()
    {
        return view('create-user');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_active' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->is_active = $request->is_active;
        $user->save();

        return redirect()->back()->with('Success', 'User Created Successfully.');
    }
    public function editUser($id)
    {
        $user = User::find($id);
        return view('edit-user', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->is_active = $request->is_active;
        $user->save();

        Mail::to($user->email)->send(new ConfirmationEmail($user->email, $request->password));

        return redirect()->back()->with('Success', 'User Edit Successfully.');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('Success', 'User Deleted Successfully.');
    }

    public function verifyUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->verified = 1;
        $user->is_active = 1;
        $user->save();
        return redirect()->back()->with('Success', 'User Verified Successfully.');
    }
}
