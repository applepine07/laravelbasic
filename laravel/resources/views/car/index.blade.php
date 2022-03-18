<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index blade</h1>
    <a href="{{route('cars.create')}}">單筆新增</a>

    @php
        // dd($data);
    @endphp

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
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
        <td>{{$oneData->email}}</td>
      </tr>
    </tbody>
@endforeach

  </table>
</body>
</html>