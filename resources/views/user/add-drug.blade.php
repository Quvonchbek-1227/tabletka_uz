@extends('user.layout.app')

@section('title')
    Taza da`ri qosiw!
@endsection


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Da'ri Qosiw!</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('user.drugs.store') }}">
                                    @if (Session::get('fail'))
                                        <div class="alert-danger alert">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    @if (Session::get('ok'))
                                        <div class="alert-primary alert">
                                            {{ Session::get('ok') }}
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" name="name" class="form-control" placeholder="Da'rinin' ati...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input name="unit" type="text" class="form-control" placeholder="O`lshem birligi...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input name="img" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                            <textarea name="description" id="" cols="30" rows="10" placeholder="Qosimsha mag`liwmat..."></textarea>
                                        </div>
                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                            <textarea name="manual" id="" cols="30" rows="10" placeholder="Da`rini qollaw ta`rtibi..."></textarea>
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="submit" class="btn btn-primary" value="OK">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection