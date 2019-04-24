@extends('template')

@section('content')

    @include('templates.mensagens')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">Login</h2><br>

            <form method="POST" action="/login">
                @csrf
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value = "{{ old('email') }}">
                        
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>    
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>    
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

        </div>
    </div>
    
@endsection