<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class TagController extends Controller
{
    public function search(){
        $tags = Tag::when(Request::input('query'), function ($query) {
            $query->where('name', 'like', '%' . Request::input('query') . '%');
        })->get();

        return $tags;
    }
}
