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
                    <h1 class="mt-1 GosorDeLetraHome text-center mt-3"><b><i class="fa-regular fa-clock text-verde2 me-2"></i>Listado de horarios</b></h1>
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
                            <a href="{{route('horarios.agregar')}}" class="btn btn-outline-success mb-3"><i class="fa-regular fa-clock me-2"></i>Agregar horario</a>
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
                                <th class="text-center" scope="col">Materia</th>
                                <th class="text-center" scope="col">Carrera</th>
                                <th class="text-center" scope="col">Docente</th>
                                <th class="text-center" scope="col">Grupo</th>
                                <th class="text-center" scope="col">Semestre</th>                
                                <th class="text-center" scope="col">Lunes</th>
                                <th class="text-center" scope="col">Martes</th>
                                <th class="text-center" scope="col">Miercoles</th>
                                <th class="text-center" scope="col">Jueves</th>
                                <th class="text-center" scope="col">Viernes</th>
                                <!-- <th class="text-center" scope="col">Editar</th> -->
                                <th class="text-center" scope="col">Eliminar</th>
                            </tr>
                        <thead>   
                        <tbody> 
                            @foreach($consulta as $horario)
                                <tr>
                                    <td class="text-start text-sm"><b>{{$horario['nombre_materia']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['nombre_carrera']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['nombre']." ".$horario['apellido_paterno']." ".$horario['apellido_materno']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['grupo']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['semestre']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['lunes']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['martes']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['miercoles']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['jueves']}}</b></td>
                                    <td class="align-middle text-sm"><b>{{$horario['viernes']}}</b></td>
                                    <!-- <td class="align-middle"><a href="{{route('horarios.prev',$horario['id_horario'])}}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a></td> -->
                                    <td class="align-middle"><b><a href="{{route('horarios.del',$horario['id_horario'])}}" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a></b></td>
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
