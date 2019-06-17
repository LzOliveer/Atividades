<h1>Lista de Mensagens</h1>
<hr>
<p>@auth<a href="/messages/create"><b>Cadastrar</b></a>  -  @endauth<a href="/messages"><b>Refresh</b></a></p>
<hr>

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

@foreach($messages as $m)
	<hr>
	<h3>{{\Carbon\Carbon::parse($m->created_at)->format('d/m/Y h:m')}}</h3>
	<p><a href="/messages/{{$m->id}}">{{$m->titulo}}</a></p>
	<p>{{$m->texto}}</p>
	<p>{{$m->autor}}</p>
	@auth
	<p>Ações:  <a href="/messages/{{$m->id}}"><b>Ver Mais</b></a>  -  <a href="/messages/{{$m->id}}/edit"><b>Editar</b></a>  -  <a href="/messages/{{$m->id}}/delete"><b>Excluir</b></a></p>
	@endauth
	<br>
	<hr>
@endforeach

<p>2019 - Luiz Cassol | Tópicos Especiais | IFRS - Campus Ibirubá</p>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->