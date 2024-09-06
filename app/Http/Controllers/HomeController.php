<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateAccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function showHomePage()  {
        $auth = Auth::user();
        $users = User::where('id','!=',$auth->id)->get();
        return view('home',compact('auth','users'));
    }

    public function showProfile($username) {
        $profile = User::where('username',$username)->firstOrFail();
        $auth = Auth::user();
        $users = User::where('id','!=',$auth->id)->get();
        return view('profile',compact('auth','users','profile'));    
    }

    public function search(Request $request) {
        $search = $request->input('search');
    
        if (empty($search)) {
            $users = User::where('id','!=',Auth::id())->get();
        } else {
            $users = User::where('name', 'LIKE', "%{$search}%")
                         ->orWhere('username', 'LIKE', "%{$search}%")
                         ->get();
        }
    
        return response()->json($users);
    }

    public function showAccountPage()  {
        $auth = Auth::user();
        return view('account',compact('auth'));
    }

    public function updateAccount(updateAccountRequest $request) {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $validatedData = $request->validated();
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            // Generate random name
            $randomName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            // Define the path
            $destinationPath = 'assets/images/';
            
            // Delete old image if exists
            if ($user->profile_image && file_exists(public_path($user->profile_image))) {
                unlink(public_path($user->profile_image));
            }
    
            // Move the new file
            $image->move(public_path($destinationPath), $randomName);
            // Save the path to the database
            $validatedData['profile_image'] = $destinationPath . $randomName;
        }
    
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        } else {
            unset($validatedData['password']);
        }
    
        $user->update($validatedData);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function getUser(Request $request) {
        $userId = $request->input('id');

        if ($userId) {
            $user = User::findOrFail($userId);
        } else {
            $user = Auth::user();
        }

        return response()->json($user);
    }
}
