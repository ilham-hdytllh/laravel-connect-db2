<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/users-dying', function () {
    $users = DB::connection('db_dying')->table('tbl_user')->get();
    return view('users-dying', compact('users'));
});

Route::get('/users-lab', function () {
    $users = DB::connection('db_laborat')->table('tbl_user')->get();
    return view('users-lab', compact('users'));
});

Route::get('/now', function () {
    $banks = DB::connection('ibmi')->table('COMPANYBANK')->get();
    return view('bank', compact('banks'));
});
