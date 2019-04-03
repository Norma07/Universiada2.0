@extends('layout.app') 
@section('content')            
        <div class= "container-fluid">       
             <div class="row">
                 <div class = "col-12 wrapper-img-top">  
               <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                        <img src="{{asset('images/todosori.jpg')}}" class="d-block img-fluid " alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                        <img src="{{asset('images/wraper.jpg')}}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('images/todosori.jpg')}}" class="d-block img-fluid" alt="...">
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
 @endsection             