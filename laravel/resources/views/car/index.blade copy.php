<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(!empty($data)){
    print_r($data);
}
?>
<hr>

{{-- 應該算是一種義大利麵條寫法吧 --}}
{{-- 如果有資料 --}}
@isset($data['message'])
<h3>message</h3>
{{-- ↑上面是html語法 --}}
@endif

{{-- 如果不是空值 --}}
@empty($data['message'])
<h3>message</h3>
{{-- ↑上面是html語法 --}}
@endif

{{-- switch --}}
@switch($data['name'])
    @case('kai123')
    hello {{$data['name']}}
        @break
    @case(2)
        @break
    @default
    hello 新朋友
@endswitch

{{-- 裡面的code是php --}}
{{-- @php
dd($data);
@endphp --}}
{{-- ↑上面取代下面↓ --}}
{{-- <?php
// dd($data);
?> --}}

<hr>

    {{-- <h1>Hello, {{ $name }}</h1> --}}
    
    <a href="{{route('cars.create')}}">add</a>
    <hr>
    
    <h1>blade(搭配在controller用php寫商業邏輯)，和在前端嵌入php語法，二種方法的對比</h1>
    <br><br>
    
    <h3>印出所有陣列值的對比</h3>
    {{-- 有↓以下這個dd，後面的程式碼想呈現啥都不行惹，奇怪，所以註解起來 --}}
    {{-- {{dd($data)}}<br> --}}
    <h3>php printr的方法</h3>
    <?php
    print_r($data);
    ?>
    
<hr>

    <h3>傳統我們以前用php在前端印陣列資料的方法</h3>
    <h4><?php echo $data['name'];?></h4>
    
    <h3>在controller用好陣列，再在前端用blade語法糖叫出的方法</h3>
    {{$data['name']}}<br>
    {{$data['chinese']}}<br>
    {{$data['english']}}<br>
    {{$data['math']}}<br>

    <hr>

   {{-- 加總及平均 --}}
   <h3>平均分數 方法一 blade</h3>
   <h5>{{$data['sum']}}</h5>
   <h5>{{$data['avg']}}</h3>
   <h3>平均分數 方法二．在前端嵌入php並使用商業邏輯運算較不推</h3>
   <?php
    $data['sum']=($data['chinese']+$data['math']+$data['english']);
    $data['avg']=$data['sum']/3;
    echo $data['sum'];
    echo "<br>";
    echo $data['avg'];
   ?>

    <hr>

    {{-- 方法一 html與php分開．blade --}}
    <h4>Hi {{$data['name']}}</h4>
    <h4>Avg => {{$data['avg']}}</h4>

    {{-- 方法二 php全部使用字串表達．儘量不要用到，因為這樣前端沒辦法偵測你的html語法是否正確 --}}
    <?php
    echo "hi".$data['name'];
    echo "<h4> hi".$data['name']."</h4>";
    // echo "<h4> hello $data['name'] </h4>";
    ?>
    <?php
    $data['avg']=($data['chinese']+$data['math']+$data['english'])/3;
    echo $data['avg'];
    ?>
    
</body>
</html>