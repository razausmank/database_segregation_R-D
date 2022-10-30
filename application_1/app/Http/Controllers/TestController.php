<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function test()
    {

        return DB::select(" select name from users u where u.test < (select MAX(id) from users u2) ");
        // $data =  User::where('name', 'usman')->where('test', 'test')->get();
        // return [$data->getBindings(), $data->toSql()];
        // return Http::post('http://127.0.0.1:8000/api/query', $data);
    }
}
