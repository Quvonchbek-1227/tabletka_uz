@extends('user.layout.app1')

@section('title')
    Assalawma A`leykum!
@endsection


@section('content')
    <section class="home-slider owl-carousel">
  
  <div class="slider-item" style="background-image: url('{{ asset('images/ph2.jpg') }}');background-size: contain; ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Assalawma
                            A`leykum Sytimizg`a Xosh Keldin`iz!</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Saytimiz Sizge
                            Izlegen Da`rin`izdi Tez Ha`m An`sat Tabiwg`a Ja`rdem Beredi.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#search"
                                class="btn btn-primary px-4 py-3">Da`ri Izlew</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('{{ asset('images/ph1.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bizdin`
                            Proektimiz Sizge Qiziqpa? <br>Bizge Sponsirliq Qiliwdi Qa`leysizbe? <br></h1>
                        <p class="mb-4" style="color: chartreuse; font-weight: bolder;">Bizdin` proektimizge qiziqsan`iz
                            ha`m sponsir boliwdi qa`lesen`iz bizge xabarlassan`iz boladi. Bizde komanda bar.</p>
                        <p><a href="#" class="btn btn-primary px-4 py-3">Sponsir Boliw</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Bizdin` Servis Xizmetlerimiz</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-pills fa-4x"></i>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Tez Ha`m An`sat Da`ri Tabiw</h3>
                            <p>
                                Saytimizg`a kirip da`rinin` atin jazin` ha`m qaysi da`rihanada bar ekenin tez tawin`.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-truck fa-4x"></i>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Jetkerip Beriw Qizmeti.</h3>
                            <p>
                                Awirip da`rihanag`a kelealmaytug`inday jag`dayda bolsa yamasa keliwinin` ila`ji bolmasa
                                da`rini jetkerip beriw xizmeti.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Qa`wender DA`rixanalar</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="info text-center">
                            <h3><a href="#">Jahangir Farm</a></h3>
                            <span class="position">Nukus</span>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rem corrupti dolorum deleniti, laudantium modi.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row  mt-5 justify-conten-center">
                <div class="col-md-8 ftco-animate">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 aside-stretch py-5">
                    <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                        <h2 class="mb-3">Bizdin` Na`tijelerimiz</h2>
                        <p>
                            Bizdin` platformamizdag`i ayrim mag`liwmatlar
                        </p>
                    </div>
                </div>
                <div class="col-md-9 py-5 pl-md-5">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="14">0</strong>
                                    <span>Da`rihana</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Dan aslam da`riler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="search">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">O`zin`izge Kerek Da`rinin` Atin Jazin`</h2>
                    <p>
                        Da`rinin` tawilg`annan keyin Aptek ma`nziline barip da`rini aliwin`iz mumkin. Eger barip
                        alatug`inday jag`dayin`iz bolmasa ha`m aptekada JBX bar bolsa sizge da`rini o`zleri jetkerip
                        beredi.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('user.searcher') }}" method="POST" class="form d-flex">
                        @csrf
                        <select class="select2 form-control" name="name">
                            @foreach ($drugs as $drug)
                                <option value="{{ $drug->id }}" >{{ $drug->name }}</option>
                            @endforeach
                          </select>
                        <button class="btn btn-primary" type="submit">
                            Izlew
                            <i class="fas fa-search ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-12 col-sm-12 col-xl-12 mt-5">
                    <div class="row">

                        @isset($pharmacies)
                            @foreach ($pharmacies as $pharmacy)
                                <div class="col-lg-4">
                                    <div class="card card-bg-img card-margin">
                                        <div class="card-header no-border">
                                                <a href="#" class="card-title h5">{{ $pharmacy->name }}</a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="widget-49">
                                                <div class="widget-49-title-wrapper">
                                                    <div class="widget-49-date-primary">
                                                        <span class="widget-49-date-day">
                                                            <?php echo rand(10,100); ?>
                                                        </span>
                                                        <span class="widget-49-date-month">
                                                            @foreach ($drugs as $drug)
                                                                @if ($pharmacy->pivot->drug_id == $drug->id)
                                                                    {{ $drug->unit }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                    <div class="widget-49-meeting-info">
                                                        <span class="widget-49-pro-title" style="font-weight: bolder;">
                                                            @foreach ($drugs as $drug)
                                                                @if ($pharmacy->pivot->drug_id == $drug->id)
                                                                    {{ $drug->name }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span class="widget-49-meeting-time">Telefon: {{ $pharmacy->telefon }}</span>
                                                    </div>
                                                </div>
                                                <ol class="widget-49-meeting-points">
                                                    <li class="widget-49-meeting-item">
                                                        <span>Baxasi:</span>
                                                        <span class="card-value">
                                                            @foreach ($dps as $dp)
                                                                @if ($pharmacy->pivot->drug_id == $dp->drug_id && $pharmacy->pivot->pharmacy_id == $dp->pharmacy_id)
                                                                    {{ $dp->price }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                    </li>
                                                    <li class="widget-49-meeting-item">
                                                        <span>Jumis Waqti:</span>
                                                        <span class="card-value">
                                                            {{ $pharmacy->work_time }}
                                                        </span>
                                                    </li>
                                                    {{-- <li class="widget-49-meeting-item">
                                                        <span>Araliq :</span>
                                                        <span class="card-value">
                                                            <?php
                                                                $masofa = rand(3,8);
                                                                echo $masofa.' km';
                                                            ?>
                                                        </span>
                                                    </li>
                                                    <li class="widget-49-meeting-item">
                                                        <span>Jol haqi :</span>
                                                        <span class="card-value">
                                                            <?php 
                                                                $price = ($masofa - 3)*1000 + 6000;
                                                                if ($masofa > 3) {
                                                                    echo $price + " sum";
                                                                }else{
                                                                    echo 6000 + " sum";
                                                                }
                                                            ?>
                                                        </span>
                                                    </li> --}}
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if(count($pharmacies) == 0)
                                <div class="alert alert-danger">Bunday da`ri hesh bir da`rixanada tabilmadi.</div>
                            @endif
                        @endisset
                        
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Usinis ham mura`ja`t ushin</h2>
                    </div>
                    <form action="#" class="ftco-animate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Atin`iz">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Temasi">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control"
                                        placeholder="Xabar"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Xabardi Jiberiw" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection