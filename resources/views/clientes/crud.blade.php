<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtro clientes</title>
</head>
<body>
    <div style="text-align: center;"> <h2>CLIENTES REGISTRADOS</h2>
    </div>
    <div style="text-align: center;">
        <a href="{{ route('dashboard') }}">ATRAS</a>
    </div>

    <div class="">
        <ul style="list-style: none; padding: 0;">
             @forelse ($clientes as $cliente)
                <li style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; border: 1px solid #eee; padding: 10px;">
                    <div>
                        <p>Nombre: **{{ $cliente->nombre }}**</p>
                        <p>Edad: {{ $cliente->edad }}</p>
                        <p>Email: {{ $cliente->email }}</p>
                        @if (isset($cliente->title) && $cliente->title !== $cliente->nombre)
                            <p>Título: {{ $cliente->title }}</p>
                        @endif
                        <p>Registrado hace: {{ $cliente->created_at->diffForHumans() }}</p>
                    </div>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE') <button type="submit" style="background-color: #e3342f; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer;">
                            Eliminar
                        </button>
                    </form>
                </li>
            @empty
                <li>NO HAY NADA QUE MOSTRAR</li>
            @endforelse
        </ul>`
        <div >{{ $clientes->links() }}</div>

    </div>

</body>
</html>
