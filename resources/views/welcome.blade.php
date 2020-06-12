@extends('layouts.app')
@section('content')
@include('partials.slide')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>Nuestros Servicios Ofertados</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-dashboard-web"></i>
              <h4><a href="#">Desarrollo Web</a></h4>
              <p>somos expertos en “Desarrollo Web”, Diseño web y Sistemas Web.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-user-alt-5"></i>
              <h4><a href="#">Diseño UI / UX</a></h4>
              <p>Es el diseño de la interfaz de usuario y de la experiencia de usuario para la comodidad de los usuarios.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-sale-discount"></i>
              <h4><a href="#">SEO Marketing</a></h4>
              <p>Conoce las últimas novedades de SEO, SEM, Posicionamiento Web y más sobre Marketing Digital! .</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-ui-image"></i>
              <h4><a href="#">Rebranding</a></h4>
              <p>Rediseño de identidad de marketing en la que se crea un nuevo nombre, término, símbolo, diseño o combinación de los mismo.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
@endsection