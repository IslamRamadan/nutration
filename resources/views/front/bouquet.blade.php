@extends('layouts.front.front')
@section('title')
    @lang('site.bouquet')
@endsection
@section('content')
    <div class=" relative1 ">
        <div class="abs w-100">
            <h1>@lang('site.bouquet')</h1>

        </div>
    </div>

    <div class="container-fluid contact-section">


        <div class="row justify-content-center clearfix">

            <!--Form Column -->
            @if (count($bouquets)>0)
                @foreach ($bouquets as $bouquet)


            <div class="column form-column pull-right col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="sec-content">

                    <div class="sec-title text-center">
                        <h3 id="bouquet-name">{!!$bouquet['title_'.app()->getLocale()]!!}</h3>
                    </div>
                    <div class="sec-desc text-dir">
                        <p>{!!$bouquet['description_'.app()->getLocale()]!!}</p>
                    </div>

                    {{-- <div class="separator back-pos"></div> --}}
                    <!--form-box-->
                    <div class="img-box">
                        <img src="{{ asset('/storage/'.$bouquet->img) }}" alt="" class="w-100 img-modal">
                    </div>
                    <div class="sec-desc text-center p-3">

                        <button type="button"  class="theme-btn btn-style-one exampleModal" style="background:#a04e42" data-toggle="modal" id-value="{{$bouquet->id}}"
                            data-target="#exampleModal">
                            @lang('site.get_boq')
                        </button>
                    </div>
                </div>

            </div>
            @endforeach


            @endif



        </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

<div class="container contact-section">


    <div class="row justify-content-center clearfix">

        <!--Form Column -->
        <div class="column form-column pull-right col-12">

            <!--form-box-->
            <div class="form-box default-form">
                <div class="container contact-section">


                    <div class="row justify-content-center clearfix">

                        <!--Form Column -->
                        <div class="column form-column pull-right col-12">

                            <!--form-box-->
                            <div class="form-box default-form">
                                <div class="contact-form default-form">
                                    <form method="post" action="{{route('service.store')}}" >
                                        {{ csrf_field() }}
                                            <div class="row clearfix">
                                            <input type="hidden" name="type" value="4">
                                            <input type="hidden" name="boquet_id"id="boquet_id" value="">

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="name" value="{{old('name')}}" placeholder="{{__('site.name')}}" required="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <input type="number" name="phone" value="{{old('phone')}}" step="0.01" placeholder="{{__('site.phone')}}" required="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <input type="email" name="email" value="{{old('email')}}" placeholder="{{__('site.email')}}" required="">
                                            </div>

                                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                                <input type="number" name="age" value="{{old('age')}}" step="0.01" placeholder="{{__('site.age')}}">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                                <input type="number" name="height" value="{{old('height')}}" step="0.01" placeholder="{{__('site.tall')}}">
                                            </div>
                                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                                <input type="number" name="weight" value="{{old('weight')}}" step="0.01" placeholder="{{__('site.weight')}}">
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <textarea name="content" placeholder="{{__('site.food_routine')}}">{{old('content')}}</textarea>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 m-0">
                                                <button type="submit" class="theme-btn btn-style-one">@lang('site.send')</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>
                </div>

            </div>
        </div>
    </div>
@endsection
<script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".exampleModal").click(function() {
            // alert("Handler for .click() called.");
            $("#boquet_id").val($(this).attr("id-value"));
            // $("#exampleModalLabel").text($("#bouquet-name").text());
        });
    });
</script>
