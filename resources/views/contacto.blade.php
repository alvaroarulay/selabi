@extends('layouts.app')
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contactanos</h2>
          <ol>
            <li><a href="/">Incio</a></li>
            <li>Contactanos</li>
          </ol>
        </div>

      </div>
    </section>
<section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3825.3630581275306!2d-68.16242038461523!3d-16.50775884530297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x915edf9a328a99a9%3A0x97f9ef1b83f13e74!2sAv%20Antofagasta%201026%2C%20La%20Paz!3m2!1d-16.507763999999998!2d-68.1602317!5e0!3m2!1ses!2sbo!4v1591891389373!5m2!1ses!2sbo" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Ubicación:</h4>
                <p>Av. Antofagasta Nro. 1026, El Alto, BOLIVIA</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>alvarolp1@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Teléfono:</h4>
                <p>+591 70628482</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{route('contact')}}" method="POST" class="php-email-form" role="form">
            {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tú Nombre" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tú Email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema"  />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection