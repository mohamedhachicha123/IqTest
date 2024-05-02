<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminTransaction;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function showUsers()
    {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }
    public function showAdmins()
    {
        $admins = Admin::all();

        return view('admin.admins', ['admins' => $admins]);
    }

    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        $users = User::where(function ($q) use ($query) {
            $q->where('username', 'like', "%{$query}%")
                ->orWhere('firstname', 'like', "%{$query}%")
                ->orWhere('lastname', 'like', "%{$query}%");
        })->get();

        return view('admin.user_table', ['users' => $users]);
    }
    public function searchAdmins(Request $request)
    {
        $query = $request->input('query');

        $admins = Admin::where(function ($q) use ($query) {
            $q->where('username', 'like', "%{$query}%")
                ->orWhere('firstname', 'like', "%{$query}%")
                ->orWhere('lastname', 'like', "%{$query}%");
        })->get();

        return view('admin.admin_table', ['admins' => $admins]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'balance_adv' => 'required|numeric',
            'balance_isa' => 'required|numeric',
            'balance_join' => 'required|numeric',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'city' => $request->city,
            'balance_adv' => $request->balance_adv,
            'balance_isa' => $request->balance_isa,
            'balance_join' => $request->balance_join,
        ]);

        return redirect()->route('admin.users')->with('status', 'User created successfully!');
    }
    public function create()
    {
        return view('admin.user_create');
    }
    public function createAdmin()
    {
        return view('admin.admin_create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);

        return redirect()->route('admin.admins')->with('status', 'Admin created successfully!');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users')->with('status', 'User deleted successfully!');
    }
    public function show(User $user)
    {
        return view('admin.user_details', ['user' => $user]);
    }
    public function storeAdminTransaction(Request $request,$id)
    {
        $request->validate([
            'date' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|integer|in:0,1,2,3',
            'amount' => 'required|numeric',
            'type' => 'required|string|in:Credit Card,Bank Transfer,Withdrawal,Wire',
        ]);


        AdminTransaction::create(array_merge($request->all(), ['user_id' => $id]));

        return redirect()->route('admin.users.show', $id)->with('status', 'Transaction created successfully!');
    }
    public function destroyTransaction($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->user->balance+=$transaction->amount;
        $transaction->delete();


        return back()->with('status', 'Transaction deleted successfully!');
    }



}
