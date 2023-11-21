@extends('layouts.app')
@section('titulo', 'TITAN TECNOLOGI')
@section('cabecera', 'TITAN TECNOLOGI - La mejor tecnologia al mejor precio')
@section('contenido')
 <div class="hero min-h-screen" style="background-image: url('/imagenes/TITAN.jpg');">
 <div class="hero-overlay bg-opacity-60"></div>
 <div class="hero-content text-center text-neutral-content">
 <div class="max-w-md">
 <h1 class="mb-5 text-5xl font-bold">Aquí encontrará lla mejor tecnologia!</h1>
 <p class="mb-5">Estamos comprometidos con nuestros clientes entregándoles lo mejor. 
Nuestros envíos no tienen costo y en tiempo record.</p>
 <a href="{{route('productos.index')}}" class="btn btn-primary">Iniciar la Inovacion </a>
 </div>
 </div>
 </div>
@endsection
