@extends('layouts._admin.app')

@section('content')

<div class="container  #fafafa grey lighten-5">

    <div class="row section">
    	<h3 align="center">Contato</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section ">
    	<div class="col s12 m7 #e3f2fd blue lighten-5">
    		@if(isset($pagina->mapa))
            <div class="video-container">
                {!! $pagina->mapa !!}
            </div>

            @else
                @if(isset($pagina->imagem))
                <img class="responsive-img" src="{{ asset($pagina->imagem) }}">
                @endif
            @endif
    	</div>
    	<div class="col s12 m5">
            @if(isset($pagina->titulo))
            <h4>{{ $pagina->titulo }}</h4>
                @endif
            <blockquote>
                @if(isset($pagina->descricao))
                {{ $pagina->descricao }}
                    @endif
            </blockquote>
       		<form class="col s12" action="{{ route('site.contato.enviar') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="nmform" value="contato">

                <div class="input-field">
    				<input type="text" name="fname" class="validate">
    				<label>First Name</label>
    			</div>

                <div class="input-field">
                    <input type="text" name="lname" class="validate">
                    <label>Last Name</label>
                </div>

    			<div class="input-field">
    				<input type="text" name="email" class="validate">
    				<label>E-mail</label>
    			</div>



                <div class="input-field">
                    <input type="text" name="subject" class="validate">
                    <label>Subject</label>
                </div>
    			<div class="input-field">
    				<textarea name="message" class="materialize-textarea"></textarea>
    				<label>Message</label>
    			</div>
    			<button class="btn blue">Enviar</button>
    		</form>

    	</div>
    </div>
</div>
@endsection
