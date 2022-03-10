<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <!-- slick css-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick-theme.css')}}"/>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>@yield('title')</title>
</head>

    @if(Lang::locale()=='ar')
        <body class="arabic">

        @else
            <body class="english">


@endif
@include('sweetalert::alert')

<!--- -->
<div class="container-fluid  border-main sticky-top " style="background:#c98863">
    <div class="  ">
        <div class="row  ">
            <nav class="navbar navbar-expand-lg col-12" id="start">
                <a  href="{{route('home.index')}}" class="p-2">
                    <img src="{{'/storage/'.$my_setting->logo}}"  class="logo" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class=" fas fa-bars c-b"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav m-dir pad-0">
                        <li class="nav-item "><a class="nav-link active" href="{{route('home.index')}}">@lang('site.home')</a></li>



                        <li class="nav-item "><a class="nav-link " href="{{route('services')}}" >@lang('site.services')</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{route('all_posts')}}" >@lang('site.post')</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{route('bouquet')}}" >@lang('site.bouquet')</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{route('about.index')}}" >@lang('site.about')</a></li>
                        {{-- <li class="nav-item">
                            <div class="dropdown nav-link" >
                                <div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('site.our_plans')
                                </div>
                                <div class="dropdown-menu text-dir" aria-labelledby="dropdownMenuButton" >
                                    @foreach($my_plans as $my_plan)
                                        @if(Lang::locale()=='ar')
                                            <a class="dropdown-item" href="{{route('my_plans.show',$my_plan->id)}}">{{$my_plan->name_ar}}</a>

                                        @else
                                            <a class="dropdown-item" href="{{route('my_plans.show',$my_plan->id)}}">{{$my_plan->name_en}}</a>


                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </li> --}}
                        {{-- @foreach (App\Models\Service::select('id','title_en','title_ar')->get() as $item)
                        <li class="nav-item"><a class="nav-link " href="{{route('service.show',$item->id)}}" >{!!$item['title_'.app()->getLocale()]!!}</a></li>
                        @endforeach --}}

                        <li class="nav-item"><a class="nav-link " href="{{route('contacts.index')}}" >@lang('site.contact_us')</a></li>

                        <li class="nav-item">
                            <div class="dropdown nav-link" >
                                <div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                                    @if(Lang::locale()=='ar')
                                        <img src="{{asset('front/img/kuwait.png')}}" width="20">  العربيه

                                    @else
                                        <img src="{{asset('front/img/en.png')}}" width="20">  English


                                    @endif
                                </div>
                                <div class="dropdown-menu  text-dir" aria-labelledby="dropdownMenuButton" >

                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                                <a style="color: red" class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>

                                        @endforeach

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>

</div>
