@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Papel</h2>
	@include('admin._caminho')
	<div class="row">
		<form action="{{ route('papeis.update',$registro->id) }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}
		@include('admin.papel._form')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection