

{{--
<pre>
@@php // la @ per non considerare lo statement
        $isActive = true;
@@endphp

</pre>

<pre>
    @isset($something)

    {{$something}}

    @endisset

@{{  something    }}

-- {!)! $something  meno comune!!} --
</pre>


@verbatim
    <div class="container">
        Hello, {
        { name }}
    </div>
@endverbatim

{{Js::from($data)->toHtml()}}
 <script>

     const data1 = {{json_encode($data)}};
     const data1 = {{json_encode($data)}};

     //molto utile
     const data = {{ Js::from($data)->toHtml() }};

     console.log(data);
 </script>
--
@isset($pageName['test'])
    <h1>{{$pageName['test'] }}</h1>
@endisset
--
<style>
    .odd{
        background-color: #dde0e3;
    }
    .even{
        background-color: #939494;
    }
</style>
<>

@php
$age = 100;
function something(){
    return Something::__VAL__;
}
@endphp

<x-live-musa-template name="Test" :age="something()">
    QUESTA è UNA LEZIONE FANTASTICA

</x-live-musa-template>


--@each('lecturers.engineering.course', $courses,'course')--

@forelse($courses as $course)

@once
    .-.-.-.-.-.-.-.-.
@endonce

    <div @class(['odd '=> $loop->odd, 'even' =>$loop->even])>
    {{ $loop->index + 1}}. {{$course->name}}
    </div>


--    @unless($loop->last), <br>@endunless --
@empty
    <p><b>NO CORSI</b></p>

@endforelse
@php
$isActive = false;
function isSelected(string $item){
    if ($item == 4 )return true;
    return false;

}
@endphp
--}}


<x-live-musa-template name="Componenti" age="venti">

<form action="#">

    @csrf

    <input type="checkbox" name="t1" >
    <select name="test" id="1">
        <option >0</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
    </select>
</form>


</x-live-musa-template>
