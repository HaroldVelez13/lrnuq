@extends('layouts.lrnuq')

@section('title', 'Documentacion')

@section('content_two')


<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!">
        <img src="{{asset('images/sliders/2.jpg')}}">
    </a>
    <a class="carousel-item" href="#two!">
        <img src="{{asset('images/sliders/iot1.jpg')}}">
    </a>
    <a class="carousel-item" href="#three!">
        <img src="{{asset('images/sliders/chimba.jpg')}}">
    </a>
    <a class="carousel-item" href="#four!">
        <img src="{{asset('images/sliders/iot2.jpg')}}">
    </a>
    <a class="carousel-item" href="#four!">
        <img src="{{asset('images/sliders/logo1.png')}}">
    </a>
</div>

<article class="container">
    <h2 class="center">INFORMACIÓN</h2>

    <section class="row">

        <div class="col s12 m4 ">
          <div class="card medium">
            <div class="card-image">
              <img src="{{asset('images/index/3.jpg')}}">
            </div>
            <div class="card-content">
                <p>
                    El internet de las cosas es una tecnología basada en el internet global que permite la interconexión de
                    objetos...
                </p>
            </div>
            <div class="card-action center">
              <a href="{{url('documentacion/#que_es_iot')}}" class="btn waves-effect waves-light" >Leer más
                    <i class="material-icons right">send</i>
              </a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card medium">
            <div class="card-image">
              <img src="{{asset('images/index/5.jpg')}}">
            </div>
            <div class="card-content">
                <p>
                    Una red neuronal articial consiste en la interconexión de elementos generalmente acondicionados
                    y con una estructura específica...
                </p>
            </div>
            <div class="card-action center">
              <a href="{{url('documentacion/#que_es_rna')}}" class="btn waves-effect waves-light" >Leer más
                    <i class="material-icons right">send</i>
              </a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card medium">
            <div class="card-image" >
              <img src="{{asset('images/index/6.jpg')}}">
            </div>
            <div class="card-content">
                <p>
                    El trabajo que realiza una neurona es único y básico. Este consiste en recepcionar las entradas
                    de las neuronas vecinas...
                </p>
                
            </div>
            <div class="card-action center">
              <a href="{{url('documentacion/#uni_proce')}}"    class="btn waves-effect waves-light" >Leer más
                    <i class="material-icons right">send</i>
              </a>
            </div>
          </div>
        </div>


    </section>

</article>

@endsection
@section('javascript')
    @parent
    <script> 
        $(document).ready(function(){
            
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                window.setTimeout(autoplay, 4500);
            }
        });
        
    </script> 
@endsection