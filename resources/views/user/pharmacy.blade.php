@extends('user.layout.app')

@section('title')
    Barliq Da`rixanalar
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                @foreach ($pharmacy as $item)
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="{{ $item->img }}" alt="darixana suwreti">
                            <div class="card-header">
                                <h5 class="card-title"></h5>
                            </div>
                            <div class="card-body">
                                <div id="accordion-seven" class="accordion accordion-header-bg accordion-bordered">
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#aa{{ $item->id }}">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Da'rixana haqqinda qosimsha.</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="aa{{ $item->id }}" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text" style="color: black">
                                                <p>
                                                    {{ $item->description }}
                                                </p>
                                                <p>
                                                    Apteka Iyesi: <b>{{ $item->full_name }}</b>
                                                </p>
                                                <p>
                                                    Adress: {{ $item->adress }}<b></b>
                                                </p>
                                                <p>
                                                    Jumis Waqti: {{ $item->work_time }}<b></b>
                                                </p>
                                                <p>
                                                    Region: {{ $item->region }}<b></b>
                                                </p>
                                                <p>
                                                    Telefon: {{ $item->telefon }}<b></b>
                                                </p>
                                                <p>
                                                    Arentr: {{ $item->arentr }}<b></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection