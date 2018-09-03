<h1>Formulário de Edição da Mensagem código {{$mensagem->id}}</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagens/{{$mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: 		<input type="text" name="title" value="{{$mensagem->title}}"> 	     <br>
	Descrição:		<input type="text" name="description" value="{{$mensagem->description}}">   <br>
	Autor:  <input type="text" name="author" value="{{$mensagem->author}}">   <br>
	<input type="submit" value="Salvar">
</form>


