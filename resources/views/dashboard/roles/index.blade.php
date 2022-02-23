@extends('layouts.dashboard.app2')
@section('title')
@lang("site.Admins_ranks")
@endsection
@section('mo')
@include('flash::message')

    @section('ti')
    @lang("site.Admins_ranks")
@endsection
    <div class="  " style="padding:10px">

        <a href="{{url(route('roles.create'))}}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.add_rank")
 </a>

    </div>


        <div class="box box-primary">



            <div class="box-header with-border">





            </div><!-- end of box header -->



            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang("site.name")</th>
                            <th> @lang("site.display_name")</th>
                            <th class="text-center">@lang("site.Procedures")</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->display_name}}</td>
                                <td class="text-center">
                                    <a href="{{url(route("roles.edit",$record->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                              
                                    <form action="{{url(route("roles.destroy",$record->id)) }}" method="post" style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
                                            </form><!-- end of form -->

                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($records)==0)
            <div class="alert alert-danger">@lang("site.no_data")
            </div>
             @endif




        </div>






   

@endsection
