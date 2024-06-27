@extends('plantilla')
@section('contenido')
<div class="container mt-4 mb-5">
    <h1 class="GosorDeLetraHome text-center mt-4" data-aos="zoom-in"><b><i class="fa-regular fa-clock text-verde2 me-2"></i>Listado De Horarios</b></h1>
    <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">
    <!--Row 1-->
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
                                <th class="text-center" scope="col">Cargar</th>
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
                                    <td class="align-middle"><b><a href="{{route('docente.prev',$horario['id_horario'])}}" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i></b></td>
                                </tr>
                            @endforeach                       
                        </tbody>              
                    </table>
                </div>
            </div>
        </div>
    <!--Row 1-->

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
