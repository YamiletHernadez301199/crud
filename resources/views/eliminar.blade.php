@extends('layouts/main')
@section('contenido')
    <div class="container my-4">
        <h2>
            Eliminar
        </h2>
        <div class="row my-4">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/" class="btn btn-success me-md-2">Regresar</a>
                </div>

                <form action="{{ route('destroy', $items->id )}}" method="post">
                    @csrf
                    @method('DELETE')
    
                    <div class="row g-2">
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Nombre</label>
                            <div class="form-floating">
                                <input type="text" name="nombre" id="nombre"
                                class="form-control" value="{{ $items->nombre}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">Marca</label>
                                <div class="form-floating">
                                    <input type="text" name="marca" id="marca"
                                    class="form-control" value="{{ $items->marca}}" >
                                </div>
                        </div>
                    </div>
    
                    <div class="row g-2">
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Modelo</label>
                            <div class="form-floating">
                                <input type="text" name="modelo" id="modelo"
                                class="form-control" value="{{ $items->modelo}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">RAM</label>
                                <div class="form-floating">
                                    <input type="text" name="ram" id="ram"
                                    class="form-control" value="{{ $items->ram}}">
                                </div>
                        </div>
                    </div>
    
                    <div class="row g-2">
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Procesador</label>
                            <div class="form-floating">
                                <input type="text" name="procesador" id="procesador"
                                class="form-control" value="{{ $items->procesador}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">Disco Duro</label>
                                <div class="form-floating">
                                    <input type="text" name="discoDuro" id="discoDuro"
                                    class="form-control" value="{{ $items->discoDuro}}">
                                </div>
                        </div>
                    </div>
                    <label for="">Descripcióm</label>
                    <input type="text" name="descripcion" id="descripcion"
                    class="form-control" value="{{ $items->descripcion}}">
                    <label for="">Imagen</label>
                    <input type="text" name="url" id="url"
                    class="form-control" value="{{ $items->url}}">
                    <button class="btn btn-danger mt-3">
                        Eliminar definitivamente!
                    </button>
                </form>
                
            </div>
        </div>
    </div>
@endsection