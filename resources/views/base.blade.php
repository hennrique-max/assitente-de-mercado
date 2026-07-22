<h1>
    welcome to de base o te site
</h1>
<p>
    Nome: {{ $nome }}
</p>
<ul>
    @foreach ($compras as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>