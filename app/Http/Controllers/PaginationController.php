<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class PaginationController extends Controller
{
    function index()
    {
      $data = DB::table('appel_offres')->paginate(2);
      return view('pagination', compact('data'));
    }
}
