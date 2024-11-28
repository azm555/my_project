<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです1。";

        // 参照
        // $records = DB::connection('mysql')->select("select * from users");
        // $name = $records[0]->name;

        // 追加
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'saburo@sample.com','saburo','saburo1')");
        // dd($insertResult);

        // 削除
        $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'taro'");
        dd($deleteResult);

        return view("sample/index" , [ "sampleValue" => $sampleValue ]);
    }
}
