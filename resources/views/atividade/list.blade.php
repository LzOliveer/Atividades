<h1>Lista de Atividades</h1>
<hr>
<p>@auth<a href="/atividades/create"><b>Cadastrar</b></a>  -  @endauth<a href="/atividades"><b>Refresh</b></a></p>
<hr>

@foreach($atividades as $a)
	<hr>
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	@auth
	<p>Ações:  <a href="/atividades/{{$a->id}}"><b>Ver Mais</b></a>  -  <a href="/atividades/{{$a->id}}/edit"><b>Editar</b></a>  -  <a href="/atividades/{{$a->id}}/delete"><b>Excluir</b></a></p>
	@endauth
	<br>
	<hr>
@endforeach

<!--Mensagem -->
@if ($errors->any())
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<!--Mensagem -->
@if (\Session::has('success'))
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<p>2019 - Luiz Cassol | Tópicos Especiais | IFRS - Campus Ibirubá</p>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->