@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.diet_order")
@endsection
@section('mo')




@section('ti')
    @lang("site.diet_order")
@endsection



<div class="box box-primary">



    <div class="box-header with-border">





        <form action="{{ route('diet.order') }}" method="get">

            <div class="row">

                <div class="col-md-4" style="margin-top:5px ">
                    {!! Form::text('search', request('search'), [
    'class' => 'form-control',
    'placeholder' => 'ابحث بالاسم او رقم الهاتف',
]) !!}
                </div>




                <div class="col-md-4" style="margin-top:5px ">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i>
                        @lang('site.search')</button>



                </div>

            </div>
        </form><!-- end of form -->


    </div><!-- end of box header -->







    <div class="box-body">


        <div class="table-responsive">
            <table class="table table-hover table-bordered  ">

                <thead>
                    <tr>
                        <th>#</th>

                        <th class="text-center">@lang('site.name')</th>
                        <th class="text-center">@lang('site.phone')</th>
                        <th class="text-center">@lang('site.age')</th>
                        <th class="text-center">@lang('site.tall')</th>
                        <th class="text-center">@lang('site.weight')</th>
                        {{-- <th class="text-center">@lang('روتين الغذاء اليومي')</th> --}}
                        <th class="text-center">@lang('site.Procedures')</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $service->name }}</td>

                            <td class="text-center">{{ $service->phone }}</td>
                            <td class="text-center">{{ $service->age }}</td>
                            <td class="text-center">{{ $service->height }}</td>
                            <td class="text-center">{{ $service->weight }}</td>

                            {{-- <td class="text-center">{{ $service->content }}</td> --}}

                            <td class="text-center">
                                <a href="{{ url(route('service.show', $service->id)) }}" class="btn btn-info btn-sm"><i
                                        class="fa fa-edit"></i> @lang('site.show')</a>


                                <form action="{{ url(route('service.destroy', $service->id)) }}" method="post"
                                    style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete  btn-sm"><i
                                            class="fa  fa-trash"></i> @lang('site.delete')</button>
                                </form><!-- end of form -->

                            </td>



                        </tr>
                    @endforeach

                </tbody>

            </table><!-- end of table -->
        </div>

        {{ $services->appends(request()->query())->links() }}
        <!-- Button trigger modal -->


    </div><!-- end of box body -->

    @if (count($services) == 0)
        <div class="alert alert-danger">@lang('site.no_data')
        </div>
    @endif













</div>












@endsection
