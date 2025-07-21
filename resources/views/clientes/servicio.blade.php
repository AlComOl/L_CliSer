<div style="text-align: center;">
    <h2>SERVICIOS REGISTRADOS</h2>
</div>
<div style="text-align: center;">
    <a href="{{ route('dashboard') }}" style="text-decoration: none; color: #007bff;">ATRAS</a>
</div>

<div class="">
    <ul style="list-style: none; padding: 0;">
        @forelse ($servicios as $servicio)
            <li style=" display: flex;justify-content: space-between;align-items: center;margin-bottom: 15px;border: 1px solid #eee;padding: 10px;background-color: #f9f9f9;border-radius: 5px;">
                <div style="flex-grow: 1; margin-right: 20px;">
                    <p style="margin: 0 0 5px 0;"><strong>Nombre Servicio:</strong> {{ $servicio->nombre }}</p>
                    <p style="margin: 0 0 5px 0;"><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
                    <p style="margin: 0;"><strong>Código:</strong> {{ $servicio->codigo }}</p>
                </div>

                <div>
                  <a  style="padding: 10px;background-color:blue; color:black" href="accion()" >Mostrar</a>
                </div>
            </li>
        @empty
            <li style="padding: 10px; text-align: center; color: #666;">No hay servicios disponibles.</li>
        @endforelse
    </ul>
</div>

