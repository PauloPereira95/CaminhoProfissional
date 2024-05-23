<?php

namespace App\Http\Controllers;

use Statamic\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::current();
        if ($request->password == $request->repeat_password) {
            $user->data([
                'name' => $request->input('name') ?? $user->get('name'),
                'email' => $request->input('email') ?? $user->get('email'),
                'super' => $user->get('super'),
                'password' => $request->input('password')
            ]);

            if ($user->save()) {
                return back();
            } else {
                return back();
            }

        } else {
            //flash()->error('erro');

            //return back()->with('error', 'As password precisam de ser iguais !');
            //return view('test');
            return back();
        }
    }
}
