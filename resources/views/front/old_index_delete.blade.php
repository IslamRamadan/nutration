@extends('layouts.front.front')
@section('title')
    @lang('site.home')

@endsection
@section('content')
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
            @foreach ($sliders as $one)
                <div class="carousel-item  @if ($i == 0) active @endif ">
                    <img class=" w-100  " src="{{ asset($one->img) }}" alt="1 slide">

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
    <!--- end head --->
    <!--- -->

    <div class="container text-center center-p">
        <br>

        <h4>{!! $my_section['title2_'.app()->getLocale()] !!}

        </h4>
        <h1>{!! $my_section['content2_'.app()->getLocale()] !!}
        </h1><br>

    </div>
    <div  class="container-fluid" >

        <div class="row">
            @foreach ($services as $item)

            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('/storage/'.$item->img)}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>{!! $item['title_'.app()->getLocale()] !!}</h5>
                        <h6>{!! $item['name_'.app()->getLocale()] !!}</h6>
                          @php
                                $pieces = explode(" ", $item['content_'.app()->getLocale()]);
                                $content = implode(" ", array_splice($pieces, 0, 10));
                            @endphp
                        <p>{!! $content !!}</p>
                        <a href="{{route('service.show',$item->id)}}" class="hide-link">
                            <p>@lang('site.view_more') &nbsp;  @if(Lang::locale()=='ar')
                                <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                @else
                                <i class="fas fa-arrow-right text-light "></i>
                                @endif
                            </p>
                        </a>


                        </div>

                </div>

            </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/3.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp;  @if(Lang::locale()=='ar')
                                <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                @else
                                <i class="fas fa-arrow-right text-light "></i>
                                @endif
                            </p>
                        </a>


                        </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/1.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp;  @if(Lang::locale()=='ar')
                                <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                @else
                                <i class="fas fa-arrow-right text-light "></i>
                                @endif
                            </p>
                        </a>


                        </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/2.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp;
                                @if(Lang::locale()=='ar')
                                <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                @else
                                <i class="fas fa-arrow-right text-light "></i>
                                @endif
                            </p>
                        </a>


                        </div>

                </div>

            </div> --}}


        </div>
    </div>
    <div class="container text-center center-p">
        <br>

        <h4 class="mb-4">{!! $my_section['title1_'.app()->getLocale()] !!}</h4>
        <h1>{!! $my_section['name1_'.app()->getLocale()] !!}
        </h1>
        <p>{!! $my_section['content1_'.app()->getLocale()] !!}</p>
        <br>

    </div>

    <div  class="container-fluid" >

        <div class="row">
            @foreach ($categories as $item)

            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <a href="{{route('category.show',$item->id)}}">
                <div class="" style="position: relative">
                    <img src="{{url('/storage/'.$item->img)}}" alt="" class="w-100 bright-50">
                    <div class="img-div1" >
                        <h2>{!! $item['name_'.app()->getLocale()] !!}</h2>



                        </div>
                    <div class="img-div2" >
                        <h5>{!! $item['title_'.app()->getLocale()] !!}</h5>

                        </div>

                </div>
               </a>

            </div>

            @endforeach







        </div>
    </div>

    <div class="container text-center center-p1">

<div class="component">
    <blockquote class="callout quote EN">
       <h2> {!! $my_section['qoute1_'.app()->getLocale()] !!}
       </h2>
       </blockquote>
    </div>
    </div>



            <div  class="container-fluid" >

                <div class="row">
                    @foreach ($products as $item)

                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="" style="position: relative">
                            <img src="{{url('storage/'.$item->img)}}" alt="" class="w-100">
                            <div class="text-center">
                                <a href="{{route('product.show',$item->id)}}" class="btn btn-primary m-5">@lang('site.view_more') &nbsp; &nbsp;
                                    @if(Lang::locale()=='ar')
                                    <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                    @else
                                    <i class="fas fa-arrow-right text-light "></i>
                                    @endif

                                </a>
                                     </div>

                        </div>

                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="" style="position: relative">
                            <img src="{{url('front/img/8.webp')}}" alt="" class="w-100">
                            <div class="text-center">
                                <a href="{{route('product.show')}}" class="btn btn-primary m-5">@lang('site.view_more') &nbsp; &nbsp;
                                    @if(Lang::locale()=='ar')
                                    <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                    @else
                                    <i class="fas fa-arrow-right text-light "></i>
                                    @endif
                                </a>
                                     </div>


                        </div>

                    </div> --}}




                </div>
            </div>

            <div class="container text-center center-p ">
                <br>
                <h4 class="mb-4">{!! $my_section['title3_'.app()->getLocale()] !!}</h4>
                <h1>{!! $my_section['name3_'.app()->getLocale()] !!}</h1>
                <p>{!! $my_section['content3_'.app()->getLocale()] !!}</p>
                {{-- <br>
                <button class="btn btn-one">@lang('site.references')
                </button>
                <br> --}}
            </div>

            <div class="container-fluid  ">
                <br>

                <h2 class="text-center">@lang('site.dry_i4')<hr>
                </h2>
                <br>
                <div class="row align-items-center">
                    @foreach (App\Models\ClientImg::all() as $item)
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url($item->img)}}" alt="" style="
                            width: -webkit-fill-available;
                        ">
                    </div>
                    @endforeach

                </div>

            </div>

            <div class="container text-center center-p1">

                <div class="component">
                    <blockquote class="callout quote EN">
                       <h2>{!! $my_section['qoute2_'.app()->getLocale()] !!}
                       </h2>
                       </blockquote>
                    </div>
                    </div>



    <div class="container-fluid">
        <br>

        <h4 class="custom-h4" >{!! $my_section['last_title_'.app()->getLocale()] !!}
        </h4>

        <div class="row">


            <div class="col-md-3 col-12 align-self-center">
                <h3 class="mb-5">{!! $my_section['last_name_'.app()->getLocale()] !!}</h3>
                <p>{!! $my_section['last_content_'.app()->getLocale()] !!}</p>
            </div>
            <div class="col-md-9 col-12">
                <img src="{{ url('storage/'.$my_section->img) }}" alt="" class="w-100">
            </div>

        </div>
    </div>

    <div class="container-fluid contact-container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 col-12 mt-sm-3">
                <h1>{!! $my_section['contact_name_'.app()->getLocale()] !!}</h1>

                <br>
                <br>
                <p>{!! $my_section['contact_content_'.app()->getLocale()] !!}</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 cus-form">
                {!! Form::model("", ['route' => ['contacts.store'],
                "method"=>"post"

                ])!!}
              {{ csrf_field() }}
                <div class="form">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="name"   placeholder="@lang('site.name')" value="{{old('name')}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="phone"   placeholder="@lang('site.phone')" value="{{old('phone')}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        </label>
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="email"   placeholder="@lang('site.email')" value="{{old('email')}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea  rows="3" name="comment" placeholder="Write message here..."  class="form-control"  >{{old('comment')}}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary " >@lang('site.submit')</button>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>



@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script> --}}
{{--  --}}
{{--  --}}
{{-- $('img[data-enlargeable]').addClass('img-enlargeable').click(function() { --}}
{{-- var src = $(this).attr('src'); --}}
{{-- var modal; --}}

{{-- function removeModal() { --}}
{{-- modal.remove(); --}}
{{-- $('body').off('keyup.modal-close'); --}}
{{-- } --}}
{{-- modal = $('<div>').css({ --}}
{{-- background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center', --}}
{{-- backgroundSize: 'contain', --}}
{{-- width: '100%', --}}
{{-- height: '100%', --}}
{{-- position: 'fixed', --}}
{{-- zIndex: '10000', --}}
{{-- top: '0', --}}
{{-- left: '0', --}}
{{-- cursor: 'zoom-out' --}}
{{-- }).click(function() { --}}
{{-- removeModal(); --}}
{{-- }).appendTo('body'); --}}
{{-- //handling ESC --}}
{{-- $('body').on('keyup.modal-close', function(e) { --}}
{{-- if (e.key === 'Escape') { --}}
{{-- removeModal(); --}}
{{-- } --}}
{{-- }); --}}
{{-- }); --}}
{{-- </script> --}}
{{-- <script> --}}
{{-- const image = document.querySelector(".clickable-image"); --}}

{{-- image.addEventListener("click", function(){ --}}
{{-- image.classList.add("image-open"); --}}
{{-- }) --}}
{{-- </script> --}}

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
