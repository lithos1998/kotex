@extends('layouts.app')

@section('content')

    <div class="div-front-image">
        <div class="banner-info">
            <h1>Fabricamos cintas elasticas para la industria en general</h1>
            <a>MÁS INFORMACION</a>
        </div>
    </div>

    <div class="container home-products">
        <h2>Productos</h2>
        
        <div class="products">
            <div class="linea">
                <h4>PRODUCTOS DE LINEA</h4>
            </div>

            <div class="especiales">
                <h4>PRODUCTOS ESPECIALES</h4>
            </div>
        </div>
    </div>

    <div class="enterprise">
        <div class="enterprise-img">
            {{-- imagen --}}
        </div>

        <div class="enterprise-info">
            <h3>Empresa</h3>
            <p><span>Kotex SRL</span>, fabrica de cintas elasticas y rigidas  de crochet, es una empresa familiar con casi 30 años en el rubro textil.</p>
            <p>Por la calidad de nuestros productos y especial enfoque en la "atencion personalizada" ocupamos un lugar de preferencia entre las empresas confeccionistas de reconocidas marcas.</p>
            <a>mas informacion</a>
        </div>
    </div>

    <div class="container services">
        <h2>Nuestros servicios</h2>

        <div class="services-content">
            @foreach (Data::$services as $service )
                <div class="service">
                    <i class="{{ $service[0] }}"></i>
                    <p>{{ $service[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container feature-products">
        <h2>Productos destacados</h2>

        <div class="products-content">
            <div class="product">
                <div class="product-img"></div>
                <p>Producto de linea</p>
                <span>Elastico de embutir</span>
            </div>
        </div>
    </div>
    
@endsection