@extends('admin.layout.app')

@section('title')
    Admin Home
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">A`pteka Qosiw!</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pharmacy.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" name="name" class="form-control" placeholder="A`pteka ati...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input name="work_time" type="text" class="form-control" placeholder="Jumis waqti...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input name="region" type="text" class="form-control" placeholder="Rayon...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="text" name="adress" class="form-control" placeholder="Adress...">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="text" name="ip_adress" class="form-control" placeholder="google karta mag`liwmatlari">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="text" name="telefon" class="form-control" placeholder="Telefon...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="text" name="arentr" class="form-control" placeholder="Arentr...">
                                        </div>
                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <input type="file" name="img" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-6 mt-2 mt-sm-0">
                                            <textarea name="description" id="" cols="30" rows="10"></textarea>
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
