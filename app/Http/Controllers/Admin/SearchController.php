<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function adminUserSearch(Request $request)
    {
        $title = 'Search user';

        if (strlen($request->search) <= 5) {

            // Создаем предупреждение об коротком запросе
            session()->flash('message_warning', 'Request too short. (min. 6)');

            return back();
        }

        $users = User::where('email', '=', $request->search)->paginate(1);

        return inertia('Admin/Users/Index', compact('title', 'users'));
    }
}
