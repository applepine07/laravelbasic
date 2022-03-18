<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('car.index');
        // echo "Car Controller hahaha";
        // return view('car.index');
        $data = DB::select('select * from users');
        // foreach($users as $user){
        //     echo $user->name."<br>";
        // }
        // dd($users);
 
        return view('car.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
        //
        // echo "CarController heyheyhey create";
    }

    // ↓從store複製而來
    public function store(Request $request){
        // echo 'hello myForm';

        // request就是一種系統的全域變數，可以印出看看
        // dd($request);
        // $url=route('cars.myform');
        // dd($url);
        // ↑上面印出的結果，"http://localhost/cars_get_form"神奇吧

        // 把接收來的資料全部存到input變數
        $input=$request->all();
        dd($input);
    }

    public function test(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    

}
