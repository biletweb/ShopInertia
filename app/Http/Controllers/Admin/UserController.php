<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Устанавливаем заголовок страницы.
        $title = 'Users';

        // Получаем список пользователей, сортированный по убыванию даты создания и разбитый на страницы.
        $users = User::orderByDesc('created_at')->paginate(10);

        // Возвращаем представление Inertia.js с передачей данных о заголовке и пользователях.
        return inertia('Admin/Users/Users', compact('title', 'users'));
    }

    public function create()
    {
        // Устанавливаем заголовок страницы.
        $title = 'Create user';

        // Возвращаем представление Inertia.js с передачей данных о заголовке.
        return inertia('Admin/Users/Create', compact('title'));
    }

    public function store(StoreRequest $request)
    {
        // Получаем валидированные данные из запроса.
        $data = $request->validated();

        // Создаем нового пользователя в базе данных, используя полученные данные.
        User::create($data);

        // Создаем уведомление об успешном выполнении
        session()->flash('message', 'User created');

        // Перенаправляем пользователя на страницу списка пользователей.
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
        // Устанавливаем заголовок страницы.
        $title = 'Edit user';

        // Возвращаем представление Inertia.js с передачей данных о заголовке и объекте пользователя.
        return inertia('Admin/Users/Edit', compact('title', 'user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        // Получаем валидированные данные из запроса.
        $data = $request->validated();

        // Проверяем, если в запросе есть текущий пароль, и если есть, проверяем его корректность.
        if ($request->current_password) {
            if (! Hash::check($request->current_password, $user->password)) {
                // Если текущий пароль неверен, возвращаем пользователя с ошибкой.
                return back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }

            // Если текущий пароль верен, валидируем новый пароль и обновляем его в базе данных.
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|min:4|confirmed',
            ]);
            $user->update(['password' => bcrypt($request->password)]);
        }

        // Если в запросе есть новый пароль или подтверждение нового пароля,
        // но при этом отсутствует текущий пароль, возвращаем ошибку.
        if ($request->password or $request->password_confirmation) {
            if ($request->current_password === null) {
                return back()->withErrors(['current_password' => 'Enter current password.']);
            }
        }

        // Обновляем остальные данные пользователя в базе данных.
        $user->update($data);

        // Создаем уведомление об успешном выполнении
        session()->flash('message', 'User updated');

        // Перенаправляем пользователя на страницу списка пользователей.
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        // Удаляем пользователя из базы данных.
        $user->delete();

        // Создаем уведомление об успешном выполнении
        session()->flash('message', 'User deleted');

        // Перенаправляем пользователя назад (на предыдущую страницу).
        return redirect()->back();
    }
}
