@extends('user.layout.app')

@section('title')
    Baylanis Bo`limi!
@endsection

@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Bas Bet</a></span> <span>Baylanis</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Biz Menen Baylanisin`!</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Baylanis Ushin Mag`liwmatlar.</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Ma`nzil:</span> No`kis Qalasi</p>
        </div>
        <div class="col-md-3">
          <p><span>Telefon:</span> <a href="tel://1234567920">+998 93 200 27 12</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">tabletkauz@gmail.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">tabletka.uz</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Atin`iz...">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="E-mailin`iz...">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Ma`sele...">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Xabar..."></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Xabardi Jiberiw" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </section>


@endsection