@extends('layouts.panel')

@section('content')
    <div class="container add-panel">
        <h1>Argregar producto</h1>
        
        <form method="POST" action="/productos">
            @csrf
            <input name="nombre" placeholder="Nombre del producto">
           
            <select name="categoria">
                <option value="linea" selected>Producto de linea</option>
                <option value="especial">Productos especiales</option>
            </select>

            <select name="medida">
                <option value="3" selected>3mm</option>
                <option value="5">5mm</option>
                <option value="10">10mm</option>
            </select>

            <button class="form-btn">Agregar</button>
        </form>
    </div>
@endsection