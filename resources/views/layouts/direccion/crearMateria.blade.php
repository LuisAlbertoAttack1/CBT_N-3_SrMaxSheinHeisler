@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <h1 class="GosorDeLetraHome text-center mt-4" data-aos="zoom-in"><b><i class="fa-solid fa-book text-verde2 me-2"></i>Añadir materia</b></h1>
        <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">
        <div class="row justify-content-around mt-5">

            <form method="post" action="{{ route('crear.materia') }}" data-aos="zoom-in" class="row justify-content-around">
                @csrf
                <div class="d-none d-md-block col-md-2 align-self-center">
                    <img src="{{ asset('img/logocbt3.webp') }}" class="mx-auto d-block img-fluid card-home" alt="Logo">
                </div>
                <div class="col-md-8 align-self-center">
                    <div class="row">
                        <div class="col-md-7 align-self-center">
                            @error('nombre_materia')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <input type="text" class="form-control rounded" id="nombre_materia" name="nombre_materia"
                                    placeholder="Nombre" value="{{ old('nombre_materia') }}">
                                <label for="nombre_materia" class="form-label"> <i class="fa-solid fa-book text-verde2"></i>
                                    Nombre De Materia</label>
                            </div>
                        </div>
                        <div class="col-md-5 align-self-center">
                            @error('carrera')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="carrera" id="carrera" class="form-control rounded"
                                    value="{{ old('carrera') }}">
                                    <option value="">Selecionar carrera</option>
                                    @foreach ($carreras as $carrera)
                                        <option value="{{ $carrera['id_carrera'] }}">{{ $carrera['nombre_carrera'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="carrera" class="form-label"><i
                                        class="fa-solid fa-scale-unbalanced-flip text-verde2"></i> Carrera</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @error('horas')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="horas" id="horas" class="form-control rounded"
                                    value="{{ old('horas') }}">
                                    <option value="">Seleccionar hrs</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label for="horas" class="form-label"><i
                                        class="fa-solid fa-business-time text-verde2"></i> Horas Por Cursar</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @error('creditos')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <input type="text" class="form-control rounded" id="creditos" name="creditos"
                                    placeholder="Creditos" value="{{ old('creditos') }}">
                                <label for="creditos" class="form-label"> <i
                                        class="fa-solid fa-calendar-plus text-verde2"></i> Creditos</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @error('semestre')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="semestre" id="semestre" class="form-control rounded"
                                    value="{{ old('semestre') }}">
                                    <option value="">Seleccionar semestre</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <label for="semestre" class="form-label"><i class="fa-solid fa-user text-verde2"></i>
                                    Semestre</label>
                            </div>
                        </div>
                    </div>
                    <!--Secccion de botones-->
                    <div class="row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('listado.materia') }}" class="btn btn-outline-danger mb-3"><b><i
                                            class="fa-solid fa-rotate-left me-2"></i>Regresar</b></a>
                            </div>
                            <!--Espacio de trabajo-->
                        </div>
                        <div class="col-sm-6" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-outline-success mb-3"><b><i
                                            class="fa-solid fa-book me-2"></i>Añadir Materia</b></button>
                            </div>
                            <!--Espacio de trabajo-->
                        </div>
                    </div>
                    <!--Secccion de botones-->
                </div>
            </form>
        </div>
    </div>
@endsection('contenido')
