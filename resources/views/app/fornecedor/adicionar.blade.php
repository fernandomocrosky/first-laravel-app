@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        @include('app/fornecedor/layouts/_partials/navbar')


        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('app.fornecedor.adicionar') }}" method="POST">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email" placeholder="E-mail"class="borda-preta">
                    <button type="submit" class="borda-preta">Cadastrar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
