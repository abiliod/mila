@extends('layouts._admin.app')
@section('content')
<div class="container">
	<h2 class="center">Lista de Papéis</h2>



    <div class="row #4db6ac teal lighten-2 ">
        <nav >
            <div class="nav-wrapper #4db6ac teal lighten-2">
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{route('home')}}">Início</a></li>
                    <li class="active"><a href="#">Lista de Papéis</a></li>

                </ul>
            </div>
        </nav>
    </div>



	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td>{{ $registro->id }}</td>
					<td>{{ $registro->nome }}</td>
					<td>{{ $registro->descricao }}</td>
					<td>

						@can('papel_editar')

						<!-- Desabilita edição de papel para administrador e  Cliente/Fornecedor ----->
                            @if( ($registro->nome != 'admin') and ($registro->nome != 'Cliente/Fornecedor'))
                            <a class="btn orange" href="{{ route('admin.papel.editar',$registro->id) }}">Editar</a>
                            <a class="btn blue" href="{{ route('admin.papel.permissao',$registro->id) }}">Permissão</a>
                            @elseif( ($registro->nome = 'admin') and ($registro->nome = 'Cliente/Fornecedor'))
                            <a class="btn orange disabled" >Editar</a>
                            <a class="btn blue" href="{{ route('admin.papel.permissao',$registro->id) }}">Permissão</a>
                            @else
                            <a class="btn orange disabled" >Editar</a>
                            <a class="btn blue disabled" >Permissão</a>
                            @endif
						@endcan
						@can('papel_deletar')
						@if( ($registro->nome != 'admin') and ($registro->nome != 'Cliente/Fornecedor'))
						<!-- Desabilita exclusão de papel  para administrador  e Cliente/Fornecedor ----->
						<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.papel.deletar',$registro->id) }}' }">Deletar</a>
						@else
						<a class="btn red disabled" >Deletar</a>
						@endif
						@endcan
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="row">
		<a class="btn blue" href="{{route('admin.papel.adicionar')}}">Adicionar</a>
	</div>
</div>
@endsection
