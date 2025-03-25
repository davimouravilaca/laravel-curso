<h1> Hello World </h1>


<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }} </p>

@if ($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Davi")
<p> O nome é Davi </p>
@else
<p>O nome nao e Pedro</p>
@endif