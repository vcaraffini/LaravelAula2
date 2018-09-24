<h1>Formulário de Cadastro de Mensagens</h1>
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


<form action="/mensagens" method="post">
{{csrf_field() }}

Título: <input type="text" name="title"> <br><br>
Descrição: <input type="text" name="description"> <br><br>
Autor: <input type="text" name="author"> <br><br>
Atividade: <select name='atividade_id'>
				@foreach($atividades as $atividade)
					<option value="{{$atividade->id}}">{{$atividade->title}}</option>
				@endforeach
			</select><br>

<input type="submit" value="Salvar">
</form>
