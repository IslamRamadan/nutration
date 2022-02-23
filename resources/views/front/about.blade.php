
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
    <div class="row justify-content-between">
        <div class="col-md-7 col-12 ">

<br>
{!! $my_setting['about_app_'.app()->getLocale()] !!}

    </div>
</div>

</div>
<!--- -->
@endsection
