@extends('layouts.panel')


@section('content')
    <div class="container control-panel">
        <h1>Panel de control</h1>
        <div class="show-products">
            <h2>Productos</h2>

            <div class="panel-buttons">
                <a class="add-btn" href="/productos/create">+ agregar producto</a>
            </div>

            <table>
                <thead>
                    <th>codigo</th>
                    <th>nombre</th>
                    <th>categoria</th>
                    <th>color</th>
                    <th>medida</th>
                    <th>unidad de venta</th>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)                        
                        <tr>
                            <td>{{ $producto['id'] }}</td>
                            <td>{{ $producto['nombre'] }}</td>
                            <td>{{ $producto['categoria'] }}</td>
                            <td>{{ $producto['color'] }}</td>
                            <td>{{ $producto['medida'] }}</td>
                            <td>{{ $producto['unidad_venta'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection