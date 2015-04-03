@extends('app')

@section('content')

<form action="{{url('contato')}}" method="post" class="col-sm-8 col-sm-offset-2 form-horizontal" role="form">
    <div class="form-group">
        <legend>Formulário de Contato</legend>
    </div>

    @unless($errors->isEmpty())
        <ul>
        @foreach($errors->getMessages() as $error)
            <li>{{ $error[0] }}</li>
        @endforeach
        </ul>
    @endunless


    <div class="form-group">
    	<label for="name" class="sr-only">Nome:</label>
    	<div class="col-sm-6">
    		<input type="text" name="name" id="contact_name" class="form-control" placeholder="Digite seu nome">
    	</div>
    </div>

    <div class="form-group">
    	<label for="email" class="sr-only">E-mail:</label>
    	<div class="col-sm-6">
    		<input type="email" name="email" id="contact_email" class="form-control" placeholder="Digite seu email">
    	</div>
    </div>

    <div class="form-group">
        <label for="message" class="sr-only">Mensagem:</label>
        <div class="col-sm-6">
            <textarea name="message" id="contact_message" class='form-control' rows="5" style="resize:none" placeholder="Digite sua mensagem..."></textarea>
        </div>
    </div>

    <input name="_token" type="hidden" value="{{csrf_token()}}"/>

    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection