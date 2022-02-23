
@extends('layouts.dashboard.app2')
@section('title')
    @lang("services")
@endsection
@section('mo')




@section('ti')
    @lang("site.services")

@endsection


$service->name-en

@foreach($service_images as $service_image)
    $service_image->service_id
    @endforeach


@endsection
