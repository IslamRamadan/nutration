@extends('layouts.dashboard.app2')
@section('title')
@lang("site.users")
@endsection
@section('mo')
@include('flash::message')
@inject("role","App\Role")

    @section('ti')
    @lang("site.managers")

@endsection
    <div class="  " style="padding:10px">

            <a href="{{url(route("users.create")) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">



            <div class="box-header with-border">





                    <form action="{{ route('users.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4"  style="margin-top:5px ">
                                {!! Form::text('keyword',request('keyword'),[
                                    'class' => 'form-control',
                                    'placeholder' => 'Search By name or email'
                                ]) !!}
                            </div>


                            <div class="col-sm-4" style="margin-top: 5px">
                                {!! Form::select('role_id',$role->pluck('display_name','id')->toArray(),request('role_id'),[
                                        'class' => 'form-control',
                                        'placeholder' =>'search by level'
                                    ]) !!}
                            </div>

                            <div class="col-md-4" style="margin-top:5px ">
                                <button  type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> @lang('site.search')</button>



                            </div>

                        </div>
                    </form><!-- end of form -->


            </div><!-- end of box header -->



            <div class="box-body">


                <div class="table-responsive">
                    <table class="data-table table table-bordered">
                        <thead>
                        <th>#</th>
                        <th class="text-center">@lang('site.user_name')</th>
                        <th class="text-center">@lang('site.user_name')</th>
                        <th class="text-center">@lang('site.rank')</th>
                        <th class="text-center">@lang('site.Procedures')</th>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">
                                    @foreach($user->roles as $role)
                                        <span class="label label-success">{{$role->display_name}}</span>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a href="{{url(route("users.edit",$user->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                               
                                    <form action="{{url(route("users.destroy",$user->id)) }}" method="post" style="display: inline-block">
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

                    {{ $users->appends(request()->query())->links() }}
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($users)==0)
            <div class="alert alert-danger">  @lang('site.no_data')
            </div>
             @endif




        </div>


    </div><!-- end of box body -->





@endsection
