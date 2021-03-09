@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')



    <div class="container-md"><div class="card">
    <h5 class="card-header">Crear Registros</h5>
    <div class="card-body">
    <div class="container-md">

<form action="/articulos" method="POST">
    @csrf
        <div class="mb-3"> 
                <label for="" class="form-label">Codigo</label> 
                <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>
        </div>  
        <div class="mb-3"> 
            <label for="" class="form-label">Descripcion</label> 
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" required>
        </div>
        <div class="mb-3"> 
            <label for="" class="form-label">Cantidad</label> 
            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" required>
        </div>
        <div class="mb-3"> 
            <label for="" class="form-label">Precio</label> 
            <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" required>
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button> 
    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@stop