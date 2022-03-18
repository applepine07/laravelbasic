<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Students;
// 引用新的資料庫model
use App\Models\Phone;
use App\Models\Love;
use App\Services\HelloService;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

// 引用一個商業邏輯
// use App\Services\HelloService;


use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 建立關聯，並將資料撈出存到變數$data
        $data = Students::with('phoneRelation')->with('lovesRelation')->get();
        // 現在是練習，故用all，實務時會設區間撈自己想撈的
        // 以下是有modal時這樣設↓↓↓
        // $data = Students::all();
        // $data = Students::find(1)->with('phone');
        // $data = Students::with('phone')->get();
        // dd($data[0]->phone->name);
        // dd($data);

        // 以下是直接從資料庫撈時這樣設↓↓↓
        // $data=DB::select('select * from students');
        return view('student.index', ['data' => $data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 總體
        // 確認資料是否真的送過來了
        // 存入資料
        // 1．存入學生資料
        // 2．存入電話 one to one
        // 3．存入愛好 one to many
        // 回去首頁

        // 確認連結
        // dd('student store ok');   

        // 確認資料送過來了
        $input = $request->all();
        $input = $request->except('_token');

        // dd($loveArr);
        // dd($input);

        // 吃飯、睡覺、打東東
        // array=[吃飯、睡覺、打東東];
        // save 吃飯
        // save 睡覺
        // save 打東東

        // 存入資料
        // 1．存入學生資料
        $data = new Students;

        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        // $data->math = $input['math'];

        $math=$input['math'];
        $helloService=new HelloService();
        $data->math=$helloService->addMath($math,20);

        $data->save();
        $student_id = $data->id;

        // 2．存入電話 one to one
        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->students_id = $student_id;
        $dataPhone->save();

        // 3．存入愛好 one to many
        // input text=>array
        $loveString = $input['love'];
        $loveArr = explode(" ", $loveString);
        // foreach 每筆資料存入
        foreach ($loveArr as $key => $value) {
            $dataLove = new Love;
            $dataLove->name = $value;
            $dataLove->students_id = $student_id;
            $dataLove->save();
        }
        // 回首頁
        return redirect()->route('students.index');
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
        // 現在是練習，故用all，實務時會設區間撈自己想撈的
        // $data = Students::find($id);
        $data = Students::where('id', $id)->with('phoneRelation')->with('lovesRelation')->first();

        // $data=DB::select('select * from students');
        // dd($data);

        // array=[吃飯、睡覺、打東東];
        // dd($data);
        // dd($data->lovesRelation[0]->name);
        $dataLovesRelationArr=$data->lovesRelation;
        $loveString="";
        foreach($dataLovesRelationArr as $key=>$value){
            if($key==0){
                $loveString=$value->name;
            }else{
                $loveString=$loveString." "."$value->name";
            }
        }
        $data['loveString']=$loveString;
        // dd($data['loveRelation']);
        return view('student.edit', ['data' => $data]);
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
        $input = $request->except('_token', '_method');
        $data = Students::find($id);

        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        // 從這裡
        $data->math = $input['math'];
        // save()是一個方法，小括號不要不見了
        $data->save();

        $student_id = $data->id;
        Phone::where('students_id', $id)->delete();

        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->students_id = $student_id;
        $dataPhone->save();

        // 愛好
        Love::where('students_id', $id)->delete();
        $loveString = $input['love'];
        $loveArr = explode(" ", $loveString);
        // foreach 每筆資料存入
        foreach ($loveArr as $key => $value) {
            $dataLove = new Love;
            $dataLove->name = $value;
            $dataLove->students_id = $student_id;
            $dataLove->save();
        }

        return redirect()->route('students.index');
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
        $data = Students::find($id);
        $data->delete();
        Phone::where('students_id', $id)->delete();
        Love::where('students_id', $id)->delete();
        return redirect()->route('students.index');
    }

    public function updateAll()
    {
        // 測試有沒有連好用↓↓↓
        // dd('update All');
        Students::where('math', '<', 100)->update(['math' => 77]);
        return redirect()->route('students.index');
    }

    public function test(){
        // $helloService=new HelloService();
        // $string=$helloService->sayHello();
        // dd($string);
        // return view('test');
    }

    public function export() 
    {
        return Excel::download(new StudentsExport, 'users.xlsx');
    }

}


