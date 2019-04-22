@extends('template')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h2 class="text-center">Registo</h2><br>

            <form method="POST" action="/registo">
                @csrf
                <div class="form-group {{ $errors->has('nome') ? 'has-error has-feedback' : '' }}">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
                    @if ($errors->has('nome'))
                        <p class="text-danger">{{ $errors->first('nome') }}</p>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>   
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>  
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>    
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>      
                    @endif
                </div>

                <div class="form-group">
                    <label for="confirmarPassword">Confirmar Password:</label>
                    <input type="password" class="form-control" id="confirmarPassword" name="confirmarPassword">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registo</button>
            </form>

        </div>
    </div>

@endsection