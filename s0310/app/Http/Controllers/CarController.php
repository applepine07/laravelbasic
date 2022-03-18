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
        $data = DB::select('select * from users');
        // foreach ($data as $user) {
        //     echo $user->name."<br>";
        // }

        // dd($users);
 
        // return view('user.index', ['users' => $users]);
        return view('car.index', ['data' => $data]);


        // echo "CarController index";    
        // form
        $data = [
            'id' => '1',
            'name' => 'kai',
            'chinese' => '80',
            'math' => '90',
            'english' => '70',
        ];
        // 商業邏輯
        // $data['avg'] = '80';


        // 進貨資料 成品 商品 日期....

        // 商業邏輯
        // 庫存報表
        // 進貨明細
        // 出貨資料
        $data['sum'] = ( $data['chinese'] + $data['math'] + $data['english'] );
        $data['avg'] = $data['sum'] / 3;

        $data['message'] = 'ok';



        // dd($data);
        return view('car.index', ['data' => $data]);
        // return view('car.index', ['name' => 'kai']);
        //return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "hello cars store";
        $input = $request->all();
        dd($input);
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

    public function myForm(Request $request){
    //    dd($request);
        $input = $request->all();
        dd($input);
    }

    public function test (){
      
    }
}
