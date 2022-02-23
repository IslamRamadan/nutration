
@extends('layouts.front.front')

@section('title')
    {{--    @lang("site.add_work")--}}

    @lang('site.contact_us')
@endsection

@section('content')

<!-----start carousel --->
<div  class=" relative1 " >
    <div class="abs w-100">
        <h1>@lang('site.contact_us')</h1>

    </div>
</div>
<!--- end head --->
<!--- -->
<div class="container-fluid  ">
    <div class="container  ">
        <br>
        <div class="row  bg-w">

            <div class="col-md-8 ">
                <h2 class="mb-3"> @lang('site.contact_us')
                </h2>
                {{-- <p>
                    {!! $my_section['contacts_title_'.app()->getLocale()] !!}
                </p> --}}


                    {!! Form::model("", ['route' => ['contacts.store'],
                      "method"=>"post"

                      ])!!}
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">@lang('site.name')</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="name"   placeholder="@lang('site.name')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">@lang('site.phone')</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="phone"   placeholder="@lang('site.phone')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">@lang('site.email')
                        </label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="email"   placeholder="@lang('site.email')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">@lang('site.comment')</label>
                        <div class="col-sm-9">
                            <textarea  rows="3" name="comment"  class="form-control"  ></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary" >@lang('site.send')</button>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
            <div class="col-md-4 border-right">
                <h3>@lang('site.phone')</h3>
                <p>{{$my_setting->contact_phone}}</p>
                <p></p>
                <h3>@lang('site.address')</h3>

                @if(Lang::locale()=='ar')
                    <p>{{$my_setting->address}} </p>

                @else
                    <p>{{$my_setting->address_en}} </p>


                @endif
                <h3>@lang('site.contact_us')
                </h3>
                <p>{{$my_setting->contact_email}}</p>
                <h3>@lang('site.follow_us')</h3>
                <nav class="navbar navbar-expand pad-0 " >
                    <ul class="navbar-nav ">
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->insta_link}}" title="instagram"><i class="fab fa-instagram"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->tw_link}}" title="twitter"><i class="fab fa-twitter"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->fb_link}}" title="call us"><i class="fas fa-phone"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->yt_link}}" title="youtube"><i class="fab fa-youtube"></i>  </a></li>

                    </ul>

                </nav>

            </div>






        </div>
        <br><br>
        <div class="container" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781246.1045858918!2d48.657151504561746!3d29.311784251648273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2z2KfZhNmD2YjZitiq4oCO!5e0!3m2!1sar!2seg!4v1589595972634!5m2!1sar!2seg" class="col-12" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


    </div></div>
<!--- -->
@endsection
