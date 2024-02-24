<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" class="{{ $class }}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{ $class }}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{ $class }}" name="email">
    <br>
    <select name="motivoContato" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $class }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
