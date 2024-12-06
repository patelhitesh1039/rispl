<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $limit = 15;
    public $paginationStart;
    public $path;
    public $customers = [];

    function index(Request $request)
    {
        $searchString = null;
        $page = $request->page ? $request->page : 1;
        $paginationStart = ($page - 1) * $this->limit;

        $totalRecords = User::count();
        $customers = User::all();
        $page = $request->page ? $request->page : 1;
        $paginationStart = ($page - 1) * $this->limit;
        $start = ($this->limit * ($page - 1)) + 1;
        $end = ($this->limit * ($page - 1)) + $this->limit < $totalRecords
            ? ($this->limit * ($page - 1)) + $this->limit
            : $totalRecords;
        $userCount = $totalRecords;

        $totalPages = ceil($userCount / $this->limit);


        return view('pages.userlist', compact('totalRecords', 'searchString', 'customers', 'page', 'start', 'end','totalPages'));
    }
}
