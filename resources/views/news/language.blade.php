
<body>
    <h1>Idioma selecionado: {{ $lang }}</h1>

    <form method="POST" action="{{ route('update-language') }}">
        @csrf
        <label for="lang">Selecione um idioma:</label>
        <select name="lang" id="lang">
            <option value="en" {{ $lang === 'en' }}>Inglês</option>
            <option value="pt_BR" {{ $lang === 'pt_BR' }}>Português (Brasil)</option>
        </select>
        <br>
        <button type="submit">Atualizar Idioma</button>
    </form>
</body>
</html>
