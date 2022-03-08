@extends('layouts.front.front')
@section('title')
    @lang('site.home')
@endsection
@section('content')
    <div id="carouselExampleIndicators1" class="carousel slide relative" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @php
                $i = 0;
            @endphp
            @foreach ($sliders as $one)
                <div class="carousel-item  @if ($i == 0) active @endif ">
                    <img class=" w-100  " src="{{ asset($one->img) }}" alt="1 slide">

                </div>
                @php
                    $i++;
                @endphp
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--- end head --->
    <!--- -->

    <div class="container text-center center-p">

        <h1>@lang('site.about')</h1>
        {{-- <div class="separator back-center"></div> --}}

    </div>




    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 ">
                {{-- <div class=""> --}}
                {{-- <img src="{{url('/storage/'.$item->img)}}" alt="" class="w-100"> --}}
                {{-- <img src="{{ url('/storage/'.$section->about_img) }}" alt="" class="w-100"> --}}

                {{-- </div> --}}
                <div id="carouselExampleIndicators" class="carousel slide relative" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach (App\Models\SectionImg::where('type', 0)->get() as $one)
                            <div class="carousel-item  @if ($i == 0) active @endif ">
                                <img class=" w-100 img-modal" src="{{ asset($one->img) }}" alt="1 slide"
                                    >

                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 sm-m">
                {!! $section['about_content_' . app()->getLocale()] !!}
            </div>


        </div>
    </div>
    <div class="container text-center center-p">

        <h1>@lang('site.services')</h1>
        {{-- <div class="separator back-center"></div> --}}


    </div>




    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div id="carouselExampleIndicators2" class="carousel slide relative" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach (App\Models\SectionImg::where('type', 1)->get() as $one)
                            <div class="carousel-item  @if ($i == 0) active @endif ">
                                {{-- <a href="{{ asset($one->img) }}" target="_blank"> --}}
                                    <img  class=" w-100 img-modal " src="{{ asset($one->img) }}" alt="1 slide">
                                {{-- </a> --}}

                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 sm-m">

                {!! $section['service_content_' . app()->getLocale()] !!}

            </div>


        </div>
    </div>

    @if (count($social) > 0)
        <div class="container text-center center-p">

            <h1 id="hhh">@lang('site.social')</h1>
            {{-- <div class="separator back-center"></div> --}}
        </div>
        <div class="container-fluid mb-3">
            {{-- <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12"> --}}
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($social as $item)
                        <div class="swiper-slide">
                            <div class="swiper-img">
                                <a href="{{ $item->link }}" target="_blank">
                                    <img src="{{ url('/storage/' . $item->img) }}" />
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="swiper-pagination"></div>
                </div>
            </div>
            {{-- </div>
        </div> --}}
        </div>
    @endif


    <!-- Trigger the Modal -->

    <!-- The Modal -->
    <div id="myModal11" class="modal11">

        <!-- The Close Button -->
        <span class="close11">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content11" id="img0111">

        <!-- Modal Caption (Image Text) -->
    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {


    // Get the modal
    var modal = document.getElementById("myModal11");
    var img = $('#myImg').val()
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    // var img = document.getElementById("myImg");
    // var img = document.getElementsByClassName("myImg");
    console.log(`Hello`);
    console.log(img);
    var modalImg = document.getElementById("img0111");

    $(".img-modal").click(function() {
        console.log('click on img');
        modal.style.display = "block";
        modalImg.src = this.src;
    });
    $("#hhh").click(function() {
        console.log('click on img');

    });

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close11")[0];

    // When the user clicks on <span> (x), close the modal
    // span.onclick = function() {
    //     modal.style.display = "none";
    // }
    $(span).click(function() {
        modal.style.display = "none";

    });
});

</script>
