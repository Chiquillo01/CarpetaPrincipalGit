<!-- resources/views/carrito/mostrar.blade.php -->
<h1>Carrito de Compras</h1>

<!-- Mostrar mensajes al usuario -->
@if(session('success'))
<div style="color: green;">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div style="color: red;">
    {{ session('error') }}
</div>
@endif
<!-- ------------------ -->

@if($carritoItems->isEmpty())
<p>El carrito está vacío.</p>
@else
@foreach($carritoItems as $item)
<div>
    Producto: {{ $item->producto }}
    Cantidad: {{ $item->cantidad }}
    Precio por Producto: ${{ $item->precio_producto }}
    Total: ${{ $item->total }}

    <!-- Formulario para eliminar del carrito -->
    <form action="{{ route('carrito.eliminar', ['carritoId' => $item->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar del Carrito</button>
    </form>
    <hr>

</div>

@endforeach
@endif

<a href="{{ route('privada') }}"><button type="button">Atrás</button></a>