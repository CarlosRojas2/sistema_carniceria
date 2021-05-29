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
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Registros de productos</h6>
                                    <p class="text-muted card-sub-title">Registrar nuevo producto.</p>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <input class="form-control" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Input box (readonly)" readonly type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <input class="form-control" disabled placeholder="Input box (disabled)" type="text">
                                    </div>
                                </div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
                                    </div>
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
