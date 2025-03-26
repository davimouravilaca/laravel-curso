 @extends('layouts.main')

 @section('title', 'DMLV Events')

 @section('content')

    <h1> Hello World </h1>

    <img src="/img/bg.jpg" alt="" style="max-width: 200px;">

''
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }} </p>

@if ($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Davi")
<p> O nome é Davi </p>
@else
<p>O nome nao e Pedro</p>
@endif

@for ($i = 0; $i < count($arr); $i++)
    <p> {{ $arr[$i] }} - {{ $i }} </p>
    @if($i == 2) 
    <p>i é 2</p> 
    @endif
@endfor

@foreach($nomes as $nome)
<p>{{ $loop->index }}</p>
<p> {{ $nome }} </p>
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

{{-- Este é um comentário do blade --}}

@endsection('content')

