<h1>Lista de Mensagens</h1>
<hr>


@if(\Session::has('success'))
<div class="container">
	<div class="alert alert-sucess">
		{{\Session::get('success')}}
	</div>
</div>
@endif


@foreach($mensagens as $Mensagem)
	<h3>Título: <b><a href="/mensagens/{{$Mensagem->id}}">{{$Mensagem->title}}</a></b></h3>
	<p>{{$Mensagem->author}}</p>
	<p>{{$Mensagem->description}}</p>
  @auth
    <p>Ações: 
      <a href="/mensagens/{{$Mensagem->id}}">Ver Mais</a>
      <a href="/mensagens/{{$Mensagem->id}}/edit">Editar</a> 
      <a href="/mensagens/{{$Mensagem->id}}/delete">Deletar</a>
    </p>
  @endauth
	<br>
@endforeach

<br>

@auth
  <p><a href="/mensagens/create">Criar novo registro</a></p>
@endauth