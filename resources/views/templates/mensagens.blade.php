@if (session('mensagemSucesso'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('mensagemSucesso') }}
    </div>
@endif

@if (session('mensagemErro'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('mensagemErro') }}
    </div>
@endif