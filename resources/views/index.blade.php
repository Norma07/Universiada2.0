@extends('layout.app') 
@section('content')  
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>          
        
        <div class= "container-fluid" id ="slider">       
             <div class="row">
                 <div class = "col-12 wrapper-img-top">  
               <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                        <img src="{{asset('images/wraper.jpg')}}" class="d-block img-fluid " alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                        <img src="{{asset('images/bienvenidos.JPG')}}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('images/Rmedios.jpg')}}" class="d-block img-fluid" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                </div>
            </div>
        </div>  

        <div class="container-fluid">
            <div class="row">
                <div class ="col-12">
                    <marquee onmouseout="this.start()" onmouseover="this.stop()" scrollamount="20">
                        <img src="{{asset('images/modelo.png')}}" id ="unis" alt="">
                        <img src="{{asset('images/mayab.png')}}" id ="unis" alt="">
                        <img src="{{asset('images/montejo.png')}}" id ="unis" alt="">
                        <img src="{{asset('images/TECNOLOGICO.png')}}" id ="unis" alt="">
                        <img src="{{asset('images/rogers.png')}}" id ="unis" alt="">

                    </marquee>
                </div>
            </div>
        </div>

        <div class ="container-fluid" id ="slider">
            <div class ="row">
                <div class ="col-6 wrapper-img-top">
            <strong>
                <h1 id ="title">Noticias Destacadas</h1>
            </strong>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/demon.jpg')}}" class="d-block img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/demon2.jpg')}}" class="d-block img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/demon.jpg')}}" class="d-block img-fluid" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                </div>
            </div>
        </div>

    <div class = "container-fluid">
        <div class ="row">
            <div class = "col-3">
            <div class= col-3>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUniversiadaMX%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                width="340" height="500" style="border:none;overflow:hidden"
                scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>


        </div>
    </div>

    <div class = "container-fluid">
        <div class="row">
            <div class="col-8">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" 
               src="https://www.youtube.com/embed/O_H4r1Woqvw" 
               frameborder="0" allow="accelerometer; autoplay; 
               encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
 
            </div>
            </div>
        </div>
    </div>

 @endsection             