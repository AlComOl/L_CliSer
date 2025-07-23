 {{-- hay que importar esto sino no va la plantilla de registro el css--}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Servicio</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">

        <h2 class="text-2xl font-bold mb-6 text-gray-900 text-center">Registrar Nuevo Servicio</h2>
        {{-- Si hay errores, mostrarlos --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">¡Error!</strong>
                <span class="block sm:inline">Por favor, corrige los siguientes errores:</span>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre Servicio:</label>
                <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="codigo" class="block text-gray-700 text-sm font-bold mb-2">Código:</label>
                <input type="codigo" id="codigo" name="codigo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline">
                    Registrar Servicio
                </button>
           <a href="{{ route('dashboard') }}"
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-5 px-4 rounded w-full focus:outline-none focus:shadow-outline block text-center">
                  Atrás
            </a>

            </div>
        </form>
    </div>
</body>
</html>
