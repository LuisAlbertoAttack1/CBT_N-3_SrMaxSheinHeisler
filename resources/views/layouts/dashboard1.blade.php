@extends('plantilla')
@section('contenido')
<div class="container mt-1">
    <h1 class="mt-5 GosorDeLetraHome" data-aos="zoom-in"><b><i class="fa-solid fa-school-flag me-2 text-verde2"></i>Funciones Subdireccion</b></h1>
    <hr class="border-success border-3 mt-3" data-aos="zoom-in">

    <!--3 Funciones-->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col" data-aos="zoom-in">
                <!--Espacio de trabajo-->
                <a href="{{route('usuarios')}}" class="card shadow card-panel mb-3">
                    <div class="card-body text-center mt-3 mb-2">
                        <i class="fa-solid fa-users-rectangle fa-6x mb-1 mb-3"></i>
                        <h6>Usuarios</h6>
                    </div>
                </a>
                <!--Espacio de trabajo-->
            </div>
            <div class="col" data-aos="zoom-in">
                <!--Espacio de trabajo-->
                <a href="{{route('lista.docente')}}" class="card shadow card-panel mb-3">
                    <div class="card-body text-center mt-3 mb-2">
                        <i class="fa-solid fa-user-tie fa-6x mb-1 mb-3"></i>
                        <h6>Docentes</h6>
                    </div>
                </a>
                <!--Espacio de trabajo-->
            </div>
            <div class="col" data-aos="zoom-in">
                <!--Espacio de trabajo-->
                <a href="{{route('listado.materia')}}" class="card shadow card-panel mb-3">
                    <div class="card-body text-center mt-3 mb-2">
                        <i class="fa-solid fa-book fa-6x mb-3"></i>
                        <h6>Materias</h6>
                    </div>
                </a>
                <!--Espacio de trabajo-->
            </div>
        </div>
    <!--3 Funciones-->

    <!--2 Funciones-->
    <div class="row mt-3">
        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
            <!--Espacio de trabajo-->
            <a href="{{route('horarios.lista')}}" class="card shadow card-panel mb-3">
                <div class="card-body text-center mt-3 mb-2">
                    <i class="fa-regular fa-clock fa-6x mb-1 mb-3"></i>
                    <h6>Asignacion de Horarios</h6>
                </div>
            </a>
            <!--Espacio de trabajo-->
        </div>
                <!-- <div class="col-md-3">
                    <a href="{{route('listado')}}" class="card shadow card-panel mb-3">
                        <div class="card-body text-center mt-3 mb-2">
                            <i class="fa-solid fa-list-check fa-6x mb-3"></i>
                            <h6>Calificaciones</h6>
                        </div>
                    </a>
                </div> -->
        <div class="col-sm-6" data-aos="zoom-in">
            <!--Espacio de trabajo-->
            <a href="{{route('f1')}}" class="card shadow card-panel mb-3">
                <div class="card-body text-center mt-3 mb-2">
                    <i class="fa-solid fa-file-arrow-up fa-6x mb-1 mb-3"></i>
                    <h6>Descarga De Archivos F1</h6>
                </div>
            </a>
            <!--Espacio de trabajo-->
        </div>
    </div>
    <!--2 Funciones-->

    <!--Seccion de descripcion que es el panel de control-->
    <div class="col-12 text-end">
        <hr class="border-success border-3 mt-4" data-aos="zoom-in">
        <h3 class=" text-verde mt-4" data-aos="zoom-in"><b><i class="fa-solid fa-screwdriver-wrench me-2 fs-7"></i>Panel De Control</b></h3>
    </div>
    <!--Seccion de descripcion que es el panel de control-->

    <!--Div de abajo de container principal-->
</div>
@endsection('contenido')