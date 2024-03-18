@extends('site/layouts/basic')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action={{ route('site.login') }} method="POST">
                @csrf
                <input name='usuario' value="{{ old('usuario') }}" type='text'placeholder='Usuário' class='borda-preta'>
                @if ($errors->has('usuario'))
                    <span class="form-errors"> {{ $errors->first('usuario') }} </span>
                @endif
                <input name='senha' value="{{ old('senha') }}" type='password'placeholder='Senha' class='borda-preta'>
                @if ($errors->has('senha'))
                    <span class="form-errors"> {{ $errors->first('senha') }} </span>
                @endif
                <button type="submit"class='borda-preta'> Acessar </button>
            </form>
            @if (isset($erro) && $erro != '')
                <span class="form-errors">{{ $erro }}</span>
            @endif
        </div>
    </div>
    </div>

    @include('site/layouts/_partials/footer')
@endsection
