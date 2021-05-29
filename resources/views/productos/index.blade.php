@extends('includes/base')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Bienvenido al Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Proyecto de prácticas</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                            <i class="fe fe-download-cloud mr-2"></i> Nuevo Producto
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Listado de productos</h6>
                                    <p class="text-muted card-sub-title">Eres libre de exportar los datos:</p>
                                </div>
                                <div class="table-responsive">
                                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                                        <thead>
                                            <tr>
                                                <th>Cod</th>
                                                <th>Nombre</th>
                                                <th>Stock</th>
                                                <th>Categoría</th>
                                                <th>Proveedor</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($prdoductos))
                                                @foreach ($productos as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td><a href="{{route('productos.show', $item->id)}}">{{$item->nombre}}</a></td>
                                                        <td>{{$item->stock}}</td>
                                                        <td>{{$item->categoria->nombre}}</td>
                                                        <td>{{$item->proveedor->nombre}}</td>
                                                        <td>{{$item->estado}}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-primary">
                                                                <i class="fe fe-search"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-info">
                                                                <i class="fe fe-edit-2"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-danger">
                                                                <i class="fe fe-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
@endsection
