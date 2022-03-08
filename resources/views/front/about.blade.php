
@extends('layouts.front.front')
@section('title')
    {{--    @lang("site.add_work")--}}

    @lang('site.about')

@endsection
@section('content')

<!-----start carousel --->
<div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">{!! $my_setting['about_'.app()->getLocale()] !!}</h4>
        <h1>@lang('site.about')</h1>

    </div>
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

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 sm-m">
            {!! $section['about_content_' . app()->getLocale()] !!}
        </div>


    </div>
</div>
<!--- -->
@endsection
