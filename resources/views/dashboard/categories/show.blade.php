
@extends('layouts.dashboard.app2')
@section('title')
    @lang("services")
@endsection
@section('mo')




@section('ti')
    @lang("site.services")

@endsection
<div class="row">
    @if(Lang::locale()=='ar')
        <h1>{{$service->name_ar}}</h1>

    @else
        <h1>{{$service->name_en}}</h1>


    @endif

</div>
<div class="row">
    <div class="col-4 m-2">

        @foreach($service_images as $service_image)
            {{--    {{$service_image->img}}--}}

            <img src="{{asset('myfiles/'.$service_image->img)}}" alt="" width="500px" height="300px">
        @endforeach

    </div>
</div>



@endsection
