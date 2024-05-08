<?php

namespace App\Http\Controllers;

use Statamic\View\View;
// use Statamic\Facades\Antlers;
use Statamic\View\Antlers\Antlers;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return (new View)
                ->template('home')
                ->layout('layout')
                ->with(['user' => $user]);
            // Redireciona para a página inicial do site
            //return view('layout', ['user' => $user]);
        } else {
            // Redirecionar para a página de login ou mostrar uma mensagem de erro
            return (new View)
                ->template('home')
                ->layout('layout');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
