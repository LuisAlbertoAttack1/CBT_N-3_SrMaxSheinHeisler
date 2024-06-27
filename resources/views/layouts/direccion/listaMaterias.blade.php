@extends('plantilla')
@section('contenido')
<div class="container mt-4 mb-5">

    <!--Row 1-->
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
            <!--Espacio de trabajo-->
                <div class="text-center">
                    <img src="{{ asset('img/logocbt3.webp') }}" width="100 rem;" class="img-fluid card-home" alt="">
                </div>
                <h1 class="mt-1 GosorDeLetraHome text-center mt-3"><b><i class="fa-solid fa-users-rectangle text-verde2 me-2"></i>Listado De Materias</b></h1>
            <!--Espacio de trabajo-->
        </div>
        <div class="col-sm-6" data-aos="zoom-in">
            <!--Espacio de trabajo-->
            <h5 class="text-center GosorDeLetra mt-5">Instrucciones</h5>
            <div class="row mt-4">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <!--Espacio de boton-->
                    <div class="d-grid gap-2">
                        <a href="{{route('panel')}}" class="btn btn-outline-danger mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Regresar</a>
                    </div>
                    <!--Espacio de boton-->
                </div>
                <div class="col-sm-6">
                    <!--Espacio de boton-->
                    <div class="d-grid gap-2">
                        <a href="{{route('add.materia')}}" class="btn btn-outline-success mb-3"><i class="fa-solid fa-book me-2"></i>Agregar materia</a>
                    </div>
                    <!--Espacio de boton-->
                </div>
              </div>
            <!--Espacio de trabajo-->
        </div>
      </div>
      <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">
    <!--Row 1-->

    <!--Row 2-->
      <div class="row">
        <div class="col" data-aos="zoom-in">
            <div class="table-responsive">
                <table class="table table-md table-hover table-responsive-lg mt-3 text-center shadow-sm rounded" id="contenido_tabla">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center" scope="col">Carrera</th>
                            <th class="text-center" scope="col">Nombre</th>
                            <th class="text-center" scope="col">Hrs</th>
                            <th class="text-center" scope="col">Creditos</th>
                            <th class="text-center" scope="col">Semestre</th>
                            <th class="text-center" scope="col">Editar</th>                            
                            <th class="text-center" scope="col">Estado</th>
                        </tr>
                    <thead>   
                    <tbody> 
                        @foreach($consulta as $materia)
                            <tr>
                                <td class="text-start"><b>{{$materia['nombre_carrera']}}</b></td>
                                <td class="text-center"><b>{{$materia['nombre_materia']}}</b></td>
                                <td class="align-middle"><b>{{$materia['horas']}}</b></td>
                                <td class="align-middle"><b>{{$materia['creditos']}}</b></td>
                                <td class="align-middle"><b>{{$materia['semestre']}}</b></td>
                                <td class="align-middle"><b><a href="{{route('precarga.materia',$materia['id_materia'])}}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a></b></td>
                                @if($materia['estado'] != 0)
                                <td class="align-middle"><b><span class="text-success" title="Habilitada"><i class="fa-regular fa-circle-check"></i></span></b></td>
                                @else
                                <td class="align-middle"><b><span class="text-danger" title="Deshabilitada"><i class="fa-solid fa-ban"></i></span></b></td>
                                @endif
                            </tr>
                        @endforeach                       
                    </tbody>                
                </table>
            </div>
        </div>
      </div>
    <!--Row 2-->


</div>
<script>
    $(document).ready(() =>{
        $('#contenido_tabla').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>
@endsection('contenido')
