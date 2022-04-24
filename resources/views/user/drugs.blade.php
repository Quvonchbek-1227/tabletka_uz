@extends('user.layout.app')

@section('title')
    Barliq Da`rixanalar
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                @foreach ($drugs as $drug)
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="{{ $drug->img }}" alt="Card image cap">
                            <div class="card-header">
                                <h5 class="card-title">{{ $drug->name }}</h5>
                            </div>
                            <div class="card-body">
                                <div id="accordion-seven" class="accordion accordion-header-bg accordion-bordered">
                                    <div class="accordion__item">
                                        <div class="accordion__header accordion__header--primary" data-toggle="collapse" data-target="#header-bg_collapseOne">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Qollaniw Ta'rtibi.</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapseOne" class="collapse accordion__body show" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                {{ $drug->manual }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#header-bg_collapseTwo">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Da'ri haqqinda qosimsha.</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapseTwo" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <p>
                                                    {{ $drug->description }}
                                                </p>
                                                <p>
                                                    O`lshem birligi: <b>{{ $drug->unit }}</b>
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
