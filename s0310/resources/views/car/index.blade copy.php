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
    if (!empty($data)) {
        print_r($data);
    }
    ?>

    @isset($data['message'])
        <h3>message</h3>
        @endif


        @empty(!$data['message'])
            <h3>message</h3>
            @endif

            @switch($data['name'])
                @case('kai123')
                    hello {{ $data['name'] }}
                @break

                @default
                    hello 新朋友
            @endswitch

            @php
                // dd($data)
            @endphp

            <?php
            dd($data);
            ?>



            <hr>
            <br><br>



            hello CarController blade
            <br><br>

            {{-- 加總 --}}
            {{-- 平均分數 --}}
            <?php
            // $data['sum'] = ( $data['chinese'] + $data['math'] + $data['english'] );
            // $data['avg'] = $data['sum'] / 3;
            ?>


            {{-- 方法一 html 與 php 分開 --}}
            <h1>Hi {{ $data['name'] }}</h1>
            <h1>Sum => {{ $data['sum'] }}</h1>
            <h1>Avg => {{ $data['avg'] }}</h1>

            {{-- 方法二 php 全部使用字串表達 --}}
            <?php
            echo '<h2> hi' . $data['name'] . '</h2>';
            ?>



            <br><br>

            <a href="{{ route('cars.create') }}">add</a> --}}

        </body>

        </html>
