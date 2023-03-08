@extends('layouts/main')
@section('contenido')
<div class="container">
    <h2 class="my-4">
        Crud de Computadoras
    </h2>
    <div class="row my-4">
        <div class="col">
            <a href="/create" class="btn btn-primary">
                Nuevo Equipo
            </a>
            <hr>
            <table class="table table-dark table-hover"  id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>RAM</th>
                        <th>Procesador</th>
                        <th>Disco duro</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th>{{ $item->nombre}}</th>
                        <td>{{ $item->marca}}</td>
                        <td>{{ $item->modelo}}</td>
                        <td>{{ $item->ram}}</td>
                        <td>{{ $item->procesador}}</td>
                        <td>{{ $item->discoDuro}}</td>
                        <td>{{ $item->descripcion}}</td>
                        <td>
                            <img src="{{ $item->url }}" alt="" width="90px" height="60px">
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('show', $item->id) }}" class=" btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection