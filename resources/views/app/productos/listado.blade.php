
@extends('templates.app')

@section('content')
<style type="text/css">
  .btn-table {
    width: 80px;
  }

</style>

<div class="container-fluid">
  <div class="row">
    <div class="col col-6">
  <h2>Listado de Productos</h2>
  </div>

<div class="col col-6">

  <label for="buscar">Buscar Producto </label>
  <input type="text" class="form-control" id="input-buscar" onkeyup="BuscarEnTabla()">
  </div>

</div>


<div class="row">
  <br>
  <table class="table table-striped" id="table">
    <thead>
      <tr>
        <th>Nombre Producto</th>
        <th>Presentación</th>
        <th>Marca</th>
        <th>Tabs</th>
        <th>Imágenes</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ( $Productos as $Producto)
      <tr>
        <td> {{ $Producto->nom_producto             }} </td>
        <td> {{ $Producto->nompresentacion          }} </td>
        <td> {{ $Producto->nom_marca                }} </td>
        <td></td>
        <td></td>

        <td class="btn-table">
          <a href="#" class="btn btn-success btn-sm btn-block btn-table" > Editar </a>
        </td>

        <td>
          <a href="#" class="btn btn-info btn-sm btn-block btn-table" > Tabs </a>
        </td>

        <td>
          <a href="#" class="btn btn-info btn-sm btn-block btn-table"> Imágenes </a>
        </td>

      </tr>
      @endforeach


    </tbody>

  </table>
</div>
</div>
</div>
@stop
