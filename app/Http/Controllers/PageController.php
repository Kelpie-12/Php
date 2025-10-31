<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // предполагаем, что есть модель User

class PageController extends Controller
{
    // Метода для отображения родительской страницы
    public function showParent()
    {
        // Получение всех пользователей
        $users = User::all();
        return view('parent', compact('users'));
    }

    // Метод для отображения дочерней страницы с пользователями
    public function showChild(Request $request)
    {
        // Передача массива users через сессию или query параметры (здесь пример с query)
        // Лучше получать пользователей по ID или через API, в этом случае:
        $users = User::all();

        return view('child', compact('users'));
    }
}