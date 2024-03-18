@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>

        @include('app/fornecedor/layouts/_partials/navbar')


        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                ...Lista ...
            </div>
        </div>
    </div>
@endsection
