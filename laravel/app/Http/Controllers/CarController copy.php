<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data = [
            'name' => 'Sophie',
            'chinese' => '80',
            'english' => '70',
            'math' => '90',
            'message'=>'ok'
        ];
        // 商業邏輯
        $data['avg'] = '80';
        // 進貨資料 成品 商品 日期…
        // 商業邏輯
        $data['sum'] = ($data['chinese'] + $data['math'] + $data['english']);
        $data['avg'] = $data['sum'] / 3;
        // 庫存報表


        return view('car.index', ['data' => $data]);
        // echo "Car Controller hahaha";
        // return view('car.index');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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


    // ↓從store複製而來
    public function myForm(Request $request){
        // 把接收來的資料全部存到input變數
        echo 'hello myForm';
        // $url=route('cars.myform');
        // dd($url);

        // $input=$request->all();
        // dd($input);
    }

}
