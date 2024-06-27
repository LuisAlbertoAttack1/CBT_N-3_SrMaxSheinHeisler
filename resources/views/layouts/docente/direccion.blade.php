@extends('plantilla')
@section('contenido')
<div class="container mt-4 mb-5">
    <h1 class="GosorDeLetraHome text-center mt-4" data-aos="zoom-in"><b><i class="fa-regular fa-address-book text-verde2 me-2"></i>Dirección</b></h1>
    <hr class="border-success border-3 mt-4 mb-3" data-aos="zoom-in">
    <div class="row justify-content-around " data-aos="zoom-in">

        <div class="col-md-12">
            <form id="frm_act_direccion" method="post" action="{{route('docente.direct')}}" class="row justify-content-around">
            @csrf
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        @error('domicilio')
                        <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i> {{$message}}</p>
                        @enderror 
                        <div class="form-floating mb-3 shadow-sm">
                            <input type="text" class="form-control rounded" name="domicilio" id="domicilio" placeholder="Domicilio" value="{{$consulta['domicilio']}}">
                            <label for="domicilio" class="form-label"><i class="fa-regular fa-address-book text-verde2"></i> Domicilio</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @error('poblado')
                        <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i> {{$message}}</p>
                        @enderror 
                        <div class="form-floating mb-3 shadow-sm">
                            <input type="text" class="form-control rounded" name="poblado" id="poblado" placeholder="Poblado" value="{{$consulta['poblado']}}">
                            <label for="poblado" class="form-label"><i class="fa-solid fa-street-view text-verde2"></i> Poblado</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @error('municipio')
                        <p class="text-danger"><i class="fas fa-exclamation-circle me-1 text-warning"></i> {{$message}}</p>
                        @enderror 
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control shadow-sm" name="municipio" id="grupo" placeholder="Municipio" value="{{$consulta['municipio']}}">
                            <label for="municipio" class="form-label rounded"><i class="fa-solid fa-location-crosshairs text-verde2"></i> Municipio</label>
                        </div>
                    </div>
                </div>
            </div>
                    <!--Secccion de botones-->
                    <div class="row mt-3 mb-5">
                        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{route('panel')}}" class="btn btn-outline-danger mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Regresar</a>
                            </div>
                            <!--Espacio de trabajo-->
                        </div>
                        <div class="col-sm-6" data-aos="zoom-in">
                            <!--Espacio de trabajo-->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-outline-success mb-3"><i class="fa-regular fa-clock me-2"></i>Añadir horario</button>
                            </div>
                            <!--Espacio de trabajo-->
                        </div>
                    </div>
                    <!--Secccion de botones-->

        </form>
        </div>
    </div>
</div>
@endsection('contenido')
