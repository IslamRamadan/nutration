
@extends('layouts.dashboard.app2')
@section('title')
    @lang("how_works")
@endsection
@section('mo')




@section('ti')
    @lang("site.how_works")

@endsection



<div class="  " style="padding:10px">

    <a href="{{ route('how_works.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

</div>


<div class="box box-primary">







    <div class="box-body">


        <div class="table-responsive">
            <table class="table table-hover table-bordered  ">

                <thead>
                <tr>
                    <th>#</th>

                    <th class="text-center">@lang('site.title_en')</th>
                    <th class="text-center">@lang('site.title_ar')</th>
                    <th class="text-center">@lang('site.content_en')</th>
                    <th class="text-center">@lang('site.content_ar')</th>

                    <th class="text-center">@lang('site.Procedures')</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($works as $work)


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$work->title_en}}</td>

                        <td class="text-center">{{$work->title_ar}}</td>
                        <td class="text-center">{{$work->content_en}}</td>
                        <td class="text-center">{{$work->content_ar}}</td>


                        <td class="text-center">

                            <a href="{{url(route("how_works.edit",$work->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>


                            <form action="{{url(route("how_works.destroy",$work->id)) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
                            </form><!-- end of form -->

                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table><!-- end of table -->
        </div>

    {{ $works->appends(request()->query())->links() }}
    <!-- Button trigger modal -->


    </div><!-- end of box body -->

    @if(count($works)==0)

                    <div class="alert alert-danger">@lang('site.no_data')
                    </div>
                @endif













            </div>












@endsection
