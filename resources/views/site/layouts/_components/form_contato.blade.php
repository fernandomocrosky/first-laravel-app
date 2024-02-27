<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $class }}" name="nome">
    @if ($errors->first('nome'))
        <span class="form-errors">{{ $errors->first('nome') }}</span>
    @endif
    <br>
    <input value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $class }}"
        name="telefone">
    @if ($errors->first('telefone'))
        <span class="form-errors">{{ $errors->first('telefone') }}</span>
    @endif
    <br>
    <input value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $class }}" name="email">
    @if ($errors->first('email'))
        <span class="form-errors">{{ $errors->first('email') }}</span>
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{ $class }}">
        <option value=''>Qual o Motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo_contato)
            <option value='{{ $motivo_contato->id }}'
                {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}
            </option>
        @endforeach
    </select>
    @if ($errors->first('motivo_contatos_id'))
        <span class="form-errors">{{ $errors->first('motivo_contatos_id') }}</span>
    @endif
    <br>
    <textarea name="mensagem" class="{{ $class }}"></textarea>
    @if ($errors->first('mensagem'))
        <span class="form-errors">{{ $errors->first('mensagem') }}</span>
    @endif
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
