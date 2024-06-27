@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <h1 class="GosorDeLetraHome text-center mt-4" data-aos="zoom-in"><b><i class="fa-solid fa-book text-verde2 me-2"></i>Editar materia</b></h1>
        <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">
        <div class="row justify-content-around mt-5">
            <form data-aos="zoom-in" method="post" action="{{ route('actualizar.materia', $consulta->id_materia) }}"
                class="row justify-content-around">
                @csrf
                @method('put')
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
                                    placeholder="Nombre" value="{{ $consulta->nombre_materia }}">
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
                                <select name="carrera" id="carrera" class="form-control rounded">
                                    <option value="">Selecionar carrera</option>
                                    @foreach ($carreras as $carrera)
                                        <option value="{{ $carrera['id_carrera'] }}"
                                            {{ $consulta->fk_carrera == $carrera->id_carrera ? 'selected=selected' : '' }}>
                                            {{ $carrera['nombre_carrera'] }}</option>
                                    @endforeach
                                </select>
                                <label for="carrera" class="form-label"><i
                                        class="fa-solid fa-scale-unbalanced-flip text-verde2"></i> Carrera</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            @error('horas')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="horas" id="horas" class="form-control rounded">
                                    <option value="">Seleccionar hrs</option>
                                    <option value="1" {{ $consulta->horas == 1 ? 'selected=selected' : '' }}>1
                                    </option>
                                    <option value="2" {{ $consulta->horas == 2 ? 'selected=selected' : '' }}>2
                                    </option>
                                    <option value="3" {{ $consulta->horas == 3 ? 'selected=selected' : '' }}>3
                                    </option>
                                    <option value="4" {{ $consulta->horas == 4 ? 'selected=selected' : '' }}>4
                                    </option>
                                    <option value="5" {{ $consulta->horas == 5 ? 'selected=selected' : '' }}>5
                                    </option>
                                </select>
                                <label for="horas" class="form-label"><i
                                        class="fa-solid fa-business-time text-verde2"></i> Horas Por Cursar</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            @error('creditos')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <input type="text" class="form-control rounded" id="creditos" name="creditos"
                                    placeholder="Creditos" value="{{ $consulta->creditos }}">
                                <label for="creditos" class="form-label"> <i
                                        class="fa-solid fa-calendar-plus text-verde2"></i> Creditos</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            @error('semestre')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="semestre" id="semestre" class="form-control rounded">
                                    <option value="">Seleccionar semestre</option>
                                    <option value="1" {{ $consulta->semestre == 1 ? 'selected=selected' : '' }}>1
                                    </option>
                                    <option value="2" {{ $consulta->semestre == 2 ? 'selected=selected' : '' }}>2
                                    </option>
                                    <option value="3" {{ $consulta->semestre == 3 ? 'selected=selected' : '' }}>3
                                    </option>
                                    <option value="4" {{ $consulta->semestre == 4 ? 'selected=selected' : '' }}>4
                                    </option>
                                    <option value="5" {{ $consulta->semestre == 5 ? 'selected=selected' : '' }}>5
                                    </option>
                                    <option value="6" {{ $consulta->semestre == 6 ? 'selected=selected' : '' }}>6
                                    </option>
                                </select>
                                <label for="semestre" class="form-label"><i class="fa-solid fa-user text-verde2"></i>
                                    Semestre</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            @error('estado')
                                <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i>
                                    {{ $message }}</p>
                            @enderror
                            <div class="form-floating mb-3 shadow-sm">
                                <select name="estado" id="estado" class="form-control form-control-sm rounded">
                                    <option value="1" {{ $consulta->estado != 0 ? 'selected=selected' : '' }}>
                                        Habilitado</option>
                                    <option value="0" {{ $consulta->estado == 0 ? 'selected=selected' : '' }}>
                                        Dehabilitado</option>
                                </select>
                                <label for="estado" class="form-label"><i
                                        class="fa-solid fa-user-gear text-verde2 me-2"></i>Estado materia</label>
                            </div>
                        </div>
                    </div>
                    <!--Secccion de botones-->
                    <div class="row mt-3">
                        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('listado.materia') }}" class="btn btn-outline-danger mb-3"><i
                                        class="fa-solid fa-rotate-left me-2"></i>Regresar</a>
                            </div>
                            <!--Espacio de trabajo-->
                        </div>
                        <div class="col-sm-6" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-outline-success mb-3"><i
                                        class="fa-solid fa-book me-2"></i>Actualizar materia</button>
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
