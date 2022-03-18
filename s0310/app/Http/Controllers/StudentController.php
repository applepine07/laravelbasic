<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Phone;
use App\Models\Love;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use PHPUnit\Framework\Test;

use App\Services\HelloService;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::with('phoneRelation')->with('lovesRelation')->get();        
        // dd($data);
        // dd($data[0]->phoneRelation->name);
        // dd($data[0]->lovesRelation);
        
        // foreach ($data[0]->lovesRelation as $key => $value) {
        //     echo "$value->name.<br>";
        // }

        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //存入資料
        //1.存入學生資料
        //2.存入電話 one to one
        //3.存入愛好 one to many 

        //確認資料送過來了
        // dd('student store ok');
        $input = $request->all();
        $input = $request->except('_token');

        
        // dd($loveString);    
        //"看書,游泳,聽音樂"
        //array = [看書,游泳,聽音樂];
        //save 看書
        //save 游泳
        //save 聽音樂


        // dd($input);

        
        
        //存入資料
        //1.存入學生資料
        $data = new Student;
        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];

        // 幫大家數學+20
        // $data->math = $input['math'] + 20;
        $math = $input['math'];

        $helloService = new HelloService();
        $data->math = $helloService->addMath($math,20);

        // $data->math = $input['math'];
        $data->save();
        $student_id = $data->id;

        //2.存入電話 one to one
        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $student_id;
        $dataPhone->save();

        //3.存入愛好 one to many 
        //input text => array
        $loveString = $input['love'];
        $loveArr = explode(" ",$loveString);
        // dd($loveArr);    
        //foreach 每筆資料存入
        foreach ($loveArr as $key => $value) {
            $dataLove = new Love;
            $dataLove->name = $value;
            $dataLove->student_id = $student_id;
            $dataLove->save();
        }

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
        // dd($id);
        // $data = Student::find($id);            
        $data = Student::where('id',$id)->with('phoneRelation')->with('lovesRelation')->first();            
        // dd($data->phoneRelation->name);

        //array = [看書,游泳,聽音樂];
        // dd($data);
        // dd($data->lovesRelation[0]->name);
        $dataLovesRelationArr = $data->lovesRelation;
        $loveString = "";
        foreach ($dataLovesRelationArr as $key => $value) {
            if($key == 0){
                $loveString =  $value->name;
            }else{
                $loveString =  $loveString." "."$value->name";
            }
        }

        $data['loveString'] = $loveString;

        // dd($loveString);
        //"看書,游泳,聽音樂"

        return view('student.edit', ['data' => $data]);
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
        $input = $request->except('_token','_method');
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        $data->math = $input['math'];
        // save() 他是一個method
        $data->save();

        $student_id = $data->id;      
        
        //電話
        Phone::where('student_id',$id)->delete();
        $dataPhone = new Phone;
        $dataPhone->name = $input['phone'];
        $dataPhone->student_id = $student_id;
        $dataPhone->save();

        //愛好
        Love::where('student_id',$id)->delete();
        $loveString = $input['love'];
        $loveArr = explode(" ",$loveString);
        // dd($loveArr);    
        //foreach 每筆資料存入
        foreach ($loveArr as $key => $value) {
            $dataLove = new Love;
            $dataLove->name = $value;
            $dataLove->student_id = $student_id;
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
        $data = Student::find($id);        
        $data->delete();
        Phone::where('student_id',$id)->delete();
        Love::where('student_id',$id)->delete();
        return redirect()->route('students.index');
    }
    
    public function updateAll()
    {
        // dd('update All');
        Student::where('chinese', '>', 60)->update(['address' => "test"]);
    }

    public function export() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }

    public function test(){
        $helloService = new HelloService();
        $string = $helloService->sayHello();
        dd($string);

        return view('test');
    }
}
