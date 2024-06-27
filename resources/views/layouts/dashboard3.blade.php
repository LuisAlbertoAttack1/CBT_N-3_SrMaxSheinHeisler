@extends('plantilla')
@section('contenido')
<div class="container mt-1">
    <h1 class="mt-5 GosorDeLetraHome"><b><i class="fa-solid fa-school-flag me-2 text-verde2"></i>Funciones Doncente</b></h1>
    <hr class="border-success border-3 mt-3" data-aos="zoom-in">
    <div class="row justify-content-center">
        <div class="col-12 mb-3">
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <a href="{{route('docente.list')}}" class="card shadow card-panel mb-3">
                        <div class="card-body text-center mt-3 mb-2">
                            <i class="fa-solid fa-book fa-6x mb-3"></i>
                            <h6>Calificaciones Materias</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('docente.info')}}" class="card shadow card-panel mb-3">
                        <div class="card-body text-center mt-3 mb-2">
                            <i class="fa-regular fa-address-book fa-6x mb-3"></i>
                            <h6>Dirección</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!--Seccion de descripcion que es el panel de control-->
    <div class="col-12 text-end">
        <hr class="border-success border-3 mt-4" data-aos="zoom-in">
        <h3 class=" text-verde mt-4" data-aos="zoom-in"><b><i class="fa-solid fa-screwdriver-wrench me-2 fs-7"></i>Panel De Control</b></h3>
    </div>
    <!--Seccion de descripcion que es el panel de control-->
</div>
@endsection('contenido')