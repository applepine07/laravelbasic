<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student單筆修改</h2>
  <table class="table table-striped">
      <form action="{{route('students.update',['student'=>$data->id])}}" method="post">
        {{-- "{{route('cars.myform')}}" 等於 "http://localhost/cars_get_form" --}}
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {{-- ↓↓↓下面等於上面那一行↑↑↑ --}}
        @csrf
        {{-- <input type="hidden" name="_method" value="put"> --}}
        {{-- ↓↓↓下面等於上面那一行↑↑↑ --}}
        @method('put')
    <thead>
      <tr>
        <th>ID</th>
        <th>名字</th>
        <th>國文</th>
        <th>英文</th>
        <th>數學</th>
        <th>電話</th>
        <th>愛好</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$data->id}}</td>
        <td><input type="text" name="name" id="name" value="{{$data->name}}"></td>
        <td><input type="number" name="chinese" id="chinese" value="{{$data->chinese}}"></td>
        <td><input type="number" name="english" id="english" value="{{$data->english}}"></td>
        <td><input type="number" name="math" id="math" value="{{$data->math}}"></td>
        <td>
          @if(!empty($data->phoneRelation->name))
          <input type="text" name="phone" id="phone" value="{{$data->phoneRelation->name}}">
          @else
          <input type="text" name="phone" id="phone" value="">
          @endif
        </td>
        <td>
          <input type="text" name="love" id="love" value="{{$data->loveString}}">
        </td>
      </tr>


    <tr>
        <td>
            <input type="submit" value="送出">
        </td>
        </tr>      
    </tbody>
  </table>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>