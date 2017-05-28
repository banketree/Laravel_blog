<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{--<h1>{{ $name }}</h1>--}}
                {{--<h1>@{{ name }}</h1>--}}
                {{--<h1>{{ $name2 or 'Default' }}</h1>--}}
                {{--<h1> {{ isset($name3) ? $name3 : 'Default' }}</h1>--}}
                {{--<h1>{{ $str }}</h1>--}}



                <!-- 6、流程控制 在if或者for后面的括号里使用php代码，不需要双花括符-->
                    @if($name == 'helloJiu')
                        I'm {{$name}}
                    @elseif($name == 'helloHu')
                        I'm helloHu
                    @else
                        who am i?{{$name}}
                    @endif

                    @if (in_array($name, $data))
                        true
                    @else
                        false
                    @endif

                    <br>

                    <!-- unless if的取反 -->
                    @unless($name == 'helloJiu')
                        I'm {{$name}}
                    @endunless

                <!-- 循环 -->
                    @for($i=0;$i<10;$i++)
                        {{ $i }}
                    @endfor

                    {{--@if ($errors->any())--}}
                        {{--<div id="error_explanation">--}}
                            {{--<h2>{{ count($errors->all()) }} prohibited--}}
                                {{--this article from being saved:</h2>--}}
                            {{--<ul>--}}
                                {{--@foreach ($errors->all() as $message)--}}
                                    {{--<li>{{ $message }}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}

                <!-- 如果$students存在，则输出，不存在，输出null -->
                    {{--@forelse($students as $student)--}}
                        {{--{{ $student->name }}--}}
                    {{--@empty--}}
                        {{--<p>null</p>--}}
                    {{--@endforelse--}}



            </div>
        </div>
    </body>
</html>
