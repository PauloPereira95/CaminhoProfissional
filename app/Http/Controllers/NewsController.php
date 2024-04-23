<?php

namespace App\Http\Controllers;


use Statamic\View;
use Illuminate\Http\Request;
use Statamic\Facades\Blueprint;
use Statamic\Facades\Collection;


class NewsController extends Controller
{
    public function view()
    {
        $optionsCategory = Blueprint::find('collections.news.news')->field('category')->get('options');
        // Renderizando uma view do Statamic

        return (new \Statamic\View\View)
        ->template('news/show')
        ->layout('news/show')
        ->with(['optionsCategory' => $optionsCategory]);

    }
}
