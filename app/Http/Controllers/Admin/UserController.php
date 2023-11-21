<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "Users";
        $users = User::orderByDesc('created_at')->paginate(10);
        return inertia('Admin/Users/Users', compact('title', 'users'));
    }

    public function create()
    {
        $title = "Create user";
        return inertia('Admin/Users/Create', compact('title'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $title = "Edit user";
        return inertia('Admin/Users/Edit', compact('title', 'user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
