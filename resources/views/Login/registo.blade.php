@extends('template')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{-- @if ($errors->all())
                @foreach ($errors->all() as $erro)
                    <div class="alert alert-danger">{{ $erro }}</div>
                @endforeach
            @endif --}}
            <h2 class="text-center">Registo</h2><br>

            <form method="POST" action="/registo">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                    @if ($errors->has('nome'))
                        <p class="text-danger">{{ $errors->first('nome') }}</p>   
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @if ($errors->has('nome'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>   
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('nome'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>   
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