
    <a href="{{ route('clientes.servicio') }}" style="text-decoration: none; color: #007bff;">ATRAS</a>

<h2>Clientes del servicio</h2>
<ul>
    @forelse ($clientes as $cliente)
        <li>
            <strong>Nombre:</strong> {{ $cliente->nombre }} <br>
            <strong>Email:</strong> {{ $cliente->email }}
        </li>
    @empty
        <li>No hay clientes asociados a este servicio.</li>
    @endforelse
</ul>
