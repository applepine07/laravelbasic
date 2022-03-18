<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <h1>students index blade</h1>
    <a href="{{route('students.create')}}">單筆新增</a>
    <a href="{{route('students.export')}}">輸出excel</a>
    <a href="{{route('students.updateAll')}}">修改大量</a>

    @php
        // dd($data);
    @endphp

<table class="table table-bordered">
    <thead>
      <tr>
        <th>序號</th>
        <th>名字</th>
        <th>中文</th>
        <th>英文</th>
        <th>數學</th>
        <th>電話</th>
        <th>愛好</th>
        <th>操作</th>
      </tr>
    </thead>
@foreach ($data as $oneData)
<p>This is user {{ $oneData->name }}</p>
@endforeach
@foreach ($data as $oneData)
    <tbody>
      <tr>
        <td>{{$oneData->id}}</td>
        <td>{{$oneData->name}}</td>
        <td>{{$oneData->chinese}}</td>
        <td>{{$oneData->english}}</td>
        <td>{{$oneData->math}}</td>
        <td>
          @if (!empty($oneData->phoneRelation->name))
          {{ $oneData->phoneRelation->name }}
      @endif
    </td>
        <td>
          @if (!empty($oneData->lovesRelation[0]->name))
          {{-- {{ $oneData->phoneRelation->name }} --}}
          {{-- @php
          foreach($oneData->lovesRelation as $key => $value){
            echo "$value->name<br>";
          }
          @endphp --}}
          @foreach ($oneData->lovesRelation as $value)
          {{$value->name}}
          @endforeach
      @endif
    </td>
        
        <td>
          {{-- 這邊的student為啥不能改成id? --}}
          <a href="{{route('students.edit', ['student' => $oneData->id])}}" class="btn btn-warning btn-sm">Edit</a>&emsp;
          &emsp;
          {{-- <a href="{{route('students.destroy', ['student' => $oneData->id])}}">delete</a> --}}
          <form class="d-inline" action="{{route('students.destroy', ['student' => $oneData->id])}}" method="post">
            @csrf
            {{-- ↑↑↑因為用post所以加一個csrf --}}
            @method('delete')
            <input type="submit" value="del"  class="btn btn-danger btn-sm">
          </form>
        </td>
      </tr>
    </tbody>
@endforeach

  </table>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>