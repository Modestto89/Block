<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $tag = new Tag();
        $tag->title = 'ПРИВЕТ МИР';
        $tag->save();
        return view (view:'admin.index');
    }
}
