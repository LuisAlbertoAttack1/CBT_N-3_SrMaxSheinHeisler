@extends('plantilla')
@section('contenido')
<div class="container mt-4">

    <!--Row 1-->
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
            <!--Espacio de trabajo-->
                <div class="text-center">
                    <img src="{{ asset('img/logocbt3.webp') }}" width="100 rem;" class="img-fluid card-home" alt="">
                </div>
                <h1 class="mt-1 GosorDeLetraHome text-center mt-3"><b><i class="fa-solid fa-users-rectangle text-verde2 me-2"></i>Listado de usuarios</b></h1>
            <!--Espacio de trabajo-->
        </div>
        <div class="col-sm-6" data-aos="zoom-in">
            <!--Espacio de trabajo-->
            <h5 class="text-center GosorDeLetra mt-5">Instrucciones</h5>
            <div class="row mt-4">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <!--Espacio de boton-->
                    <div class="d-grid gap-2">
                        <a href="{{route('panel')}}" class="btn btn-outline-danger mb-3"><b><i class="fa-solid fa-rotate-left me-2"></i>Regresar</b></a>
                    </div>
                    <!--Espacio de boton-->
                </div>
                <div class="col-sm-6">
                    <!--Espacio de boton-->
                    <div class="d-grid gap-2">
                        <a href="{{route('agregar')}}" class="btn btn-outline-success mb-3"><b><i class="fa-solid fa-user-plus me-2"></i>Agregar Usuario</b></a>
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
        <div class="row mb-5">
            <div class="col" data-aos="zoom-in">
                <div class="table-responsive">
                    <table class="table table-md table-hover table-responsive-lg mt-3 mb-3 text-center shadow-sm rounded" id="contenido_tabla">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center" scope="col">Usuario</th>
                                <th class="text-center" scope="col">Nombre(s)</th>
                                <th class="text-center" scope="col">Ap. Paterno</th>
                                <th class="text-center" scope="col">Ap. Materno</th>
                                <th class="text-center" scope="col">Puesto</th>
                                <th class="text-center" scope="col">Editar</th>
                                <th class="text-center" scope="col">Act. contraseña</th>
                                <th class="text-center" scope="col">Estado</th>                            
                            </tr>
                        <thead>   
                        <tbody> 
                            @foreach($consulta as $usuario)
                                <tr>
                                    <td class="text-start"><b>{{$usuario['usuario']}}</b></td>
                                    <td><b>{{$usuario['nombre']}}</b></td>
                                    <td><b>{{$usuario['apellido_paterno']}}</b></td>
                                    <td><b>{{$usuario['apellido_materno']}}</b></td>
                                    <td><b>{{$usuario['rol']}}</b></td>
                                    <td><a href="{{route('precarga.usuario',$usuario['id_usuario'])}}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td><a href="{{route('password.usuario',$usuario['id_usuario'])}}" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-unlock-keyhole"></i></a></td>
                                    @if($usuario['estado'] == 0)
                                    <td><span title="Deshabilitada" class="text-danger"><i class="fa-solid fa-user-large-slash mt-1"></i></span></td>
                                    @else
                                    <td><span title="Habilitada" class="text-success"><i class="fa-solid fa-user-check mt-1"></i></span></td>
                                    @endif
                                </tr>
                            @endforeach                       
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>
    <!--Row 2-->

    <!--Div de abajo de container principal-->
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
