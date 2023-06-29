
{{--<div>
    @php
        use Illuminate\Foundation\Inspiring;
       // echo $html->toHtml()
        @endphp

        {!! Inspiring::quote() !!}
    <h1>
        {{$name}} / {{$age}}
    </h1>

    <h1 style="color: brown ">
        {{$slot}}
    </h1>
</div>
--}}

<html>
<head>
    <title>{{$name}}</title>
    <style>
        body {
            background-color: #86a7a7;

        }
    </style>
</head>
<body>
<h1 style="color: black ">
    {{$slot}}
</h1>

</body>
</html>
