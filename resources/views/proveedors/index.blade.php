@extends('includes/base')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">

                <br>@include('flash::message')
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h1 class="main-content-title tx-24 mg-b-5">LISTADO DE PROVEEDORES</h1><br>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">proveedores</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <a type="button" href="{{route('proveedors.create')}}" data-toggle="tooltip" title="Agregar proveedor" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-primary">
                            <i class="fe fe-download-cloud mr-2"></i> Nuevo proveedor
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Email</th>                                    
                                                <th>Numero de RUC</th>
                                                <th>Teléfono</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Email</th>                                    
                                                <th>Numero de RUC</th>
                                                <th>Teléfono</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($proveedors as $prov)
                                                <tr>
                                                    <td>{{$n++}}</td>
                                                    <td>{{$prov->nombre}}</a></td>
                                                    <td>{{$prov->email}}</td>
                                                    <td>{{$prov->numero_ruc}}</td>
                                                    <td>{{$prov->telefono}}</td>
                                                    <td>
                                                        <a href="{{route('proveedors.edit', $prov->id)}}" class="btn-outline-warning"><i class="fa fa-edit"></i></a>
                                                        <a href="#" class="btn-outline-danger" data-toggle="modal" data-target="#deleteModal" data-proveedorid="{{$prov['id']}}"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @section('modal')
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de que quieres eliminar este proveedor?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
           
                <div class="modal-body">Confirme si desea Eliminar el proveedor. </div>
                
                    <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
                    @if ($cont>0)
                    <form method="POST" action="{{route('proveedors.destroy', $prov->id)}}">
                        @method('delete')
                        @csrf
                        {{-- <input type="hidden" id="proveedor_id" name="proveedor_id" value=""> --}}
                        <a class="btn btn-danger" style="color:White" role="button" onclick="$(this).closest('form').submit();">Confirmar</a>
                    </form>
                    @endif
                    
    
                </div>
            </div>
        </div>
    </div>
    @endsection

@endsection
