
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')
    



     @section('ti')
     @lang("site.slider")

     @endsection



    <div class="  " style="padding:10px">

            <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">



        



            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                          .
                            <th class="text-center">@lang('site.name')</th>
                            <th class="text-center">@lang('site.image')</th>
                            <th class="text-center">@lang('site.status')</th>
                            <th class="text-center">@lang('site.arrangement')</th>

                            <th class="text-center">@lang('site.Procedures')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$category->text}}</td>

                            <td class="text-center"><img src="{{ asset($category->img) }}" alt="" width="90px" height="70px">  </td>
                            <td class="text-center">{{$category->activity==1?"enabled":"disabled"}}</td>
                            <td class="text-center">{{$category->num}}</td>


                                <td class="text-center">

                                        <a href="{{url(route("sliders.edit",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                               
                                <form action="{{url(route("sliders.destroy",$category->id)) }}" method="post" style="display: inline-block">
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

                    {{ $categories->appends(request()->query())->links() }}
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($categories)==0)

            <div class="alert alert-danger">@lang('site.no_data')
            </div>
             @endif



        </div>









@endsection


