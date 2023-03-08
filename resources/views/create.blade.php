@extends('layouts/main')

@section('contenido')

    <div class="container my-4">
        <h2>
            Agregar nuevo Equipo
        </h2>
        <div class="row my-4">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/" class="btn btn-success me-md-2">Regresar</a>
                </div>
                <form action="/store" method="post" >
                    @csrf
                    @method('POST')
                    <div class="row g-2" >
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Nombre</label>
                            <div class="form-floating">
                                <input type="text" name="nombre" id="nombre"
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">Marca</label>
                                <div class="form-floating">
                                    <input type="text" name="marca" id="marca"
                                    class="form-control">
                                </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Modelo</label>
                            <div class="form-floating">
                                <input type="text" name="modelo" id="modelo"
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">RAM</label>
                                <div class="form-floating">
                                    <input type="text" name="ram" id="ram"
                                    class="form-control">
                                </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2" >Procesador</label>
                            <div class="form-floating">
                                <input type="text" name="procesador" id="procesador"
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="floatingInputGrid" class="my-2">Disco Duro</label>
                                <div class="form-floating">
                                    <input type="text" name="discoDuro" id="discoDuro"
                                    class="form-control">
                                </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <label for="">Ingresa la url de la imagen</label>
                    <input type="text" name="url" id="url" placeholder="Ingresa un URL:"
                    class="form-control">
                    <button class="btn btn-primary my-3">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection