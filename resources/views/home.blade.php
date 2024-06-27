@extends('plantilla')
@section('contenido')
    {{-- Carrusel--}}
    <div id="carouselExample" class="carousel slide" data-aos="zoom-in">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/ImgCarrusel/ImgCarrusel1.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ImgCarrusel/ImgCarrusel2.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ImgCarrusel/ImgCarrusel3.webp') }}" class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ImgCarrusel/ImgCarrusel4.webp') }}" class="img-fluid" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{--Carrusel--}}



    <div class="container">
      <h2 class="text-center mt-4 mb-4 GosorDeLetraHome" data-aos="zoom-in"><b>Cbt 3 Sr Max Shein Heisler Chalco</b></h2>
      <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">

      <!--Row 1-->
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0" data-aos="zoom-in">
          <!--Espacio de trabajo-->
            <div class="text-center">
              <img src="{{ asset('img/FotoCbtEvento.webp') }}" class="img-fluid rounded-4" alt="Logo" width="550px">
            </div>
          <!--Espacio de trabajo-->
        </div>
        <div class="col-sm-6" data-aos="zoom-in">
          <!--Espacio de trabajo-->
          <h5 class="mt-5 text-center">El Centro de Bachillerato Tecnológico Industrial y de Servicios No. 3 "Sr. Max Shein Heisler", también conocido como CBT 3, es una institución educativa de nivel técnico ubicada en Chalco, Estado de México.</h5>
          <h5 class="mt-2 text-center">Con más de 40 años de experiencia, el CBT 3 se ha consolidado como una de las mejores opciones para estudiar carreras técnicas en la región.</h5>
          <!--Espacio de trabajo-->
        </div>
      </div>
      <!--Row 1-->
      <h2 class="text-center mt-4 mb-2 GosorDeLetraHome">¿ Qué Carreras Ofrece El CBT N° 3 Sr. Max. Shein Heisler, Chalco ?</h2>
      <hr class="border-success border-3 mt-4 mb-5" data-aos="zoom-in">

      <!--Row 2-->
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" data-aos="zoom-in">
          <div class="card card-home shadow-lg">
            <div class="text-center">
              <img src="{{ asset('img/ContabilidadLogo.webp') }}" width="200 rem;" class="img-fluid mt-5" alt="" srcset="">
            </div>
            <div class="card-body">
              <h5 class="text-center"><b>Técnico En Contabilidad</b></h5>
              <hr class="border-success border-3" data-aos="zoom-in">
              <p class="text-center">Los técnicos contables asisten a los contables mediante la recopilación, comprobación y análisis de información financiera y la preparación de informes.</p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in">
          <div class="card card-home shadow-lg">
            <div class="text-center">
              <img src="{{ asset('img/InformaticaLogo.webp') }}" width="200 rem;" class="img-fluid mt-5" alt="" srcset="">
            </div>
            <div class="card-body">
              <h4 class="text-center"><b>Técnico En Informática</b></h4>
              <hr class="border-success border-3" data-aos="zoom-in">
              <p class="text-center">El Técnico en Informática es capaz de desempeñarse en tareas de producción, diseño y mantenimiento de software en diversos tipos de proyectos de Sistemas de Información.</p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in">
          <div class="card card-home shadow-lg">
            <div class="text-center">
              <img src="{{ asset('img/DiseñoLogo.webp') }}" width="200 rem;" class="img-fluid mt-5" alt="" srcset="">
            </div>
            <div class="card-body">
              <h4 class="text-center"><b>Técnico En Diseño En Computadora</b></h4>
              <hr class="border-success border-3" data-aos="zoom-in">
              <p class="text-center">La carrera de Técnico en Diseño Asistido por Computadora ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a ilustrar.</p>
            </div>
          </div>
        </div>
      </div>
      <!--Row 2-->
      <br>
      <h5 class="mt-4 text-center" data-aos="zoom-in">Los estudiantes del CBT 3 también tienen acceso a instalaciones y equipos de última generación, lo que les permite realizar prácticas y proyectos de alta calidad. Además, la institución cuenta con un cuerpo docente altamente capacitado y comprometido con la formación de los alumnos.</h5>
      <h5 class="mt-4 mb-5" data-aos="zoom-in">Otra ventaja importante de estudiar en el CBT 3 es la posibilidad de realizar prácticas profesionales en empresas y organizaciones de la región, lo que les permite a los estudiantes adquirir experiencia laboral y establecer contactos que pueden ser importantes para su futuro profesional.</h5>
      <!--Ultimo div es del container-->
    </div>
@endsection('contenido')