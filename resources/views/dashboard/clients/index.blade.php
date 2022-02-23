@extends('layouts.dashboard.app2')
@section('title')
@lang("المستخدمين")
@endsection
@section('mo')
@include('flash::message')
@inject("role","App\Role")

    @section('ti')
    المستخدمين
@endsection
    <div class="  " style="padding:10px">

            <a href="{{url(route("users.create")) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">





            <div class="box-body">


                <div class="table-responsive">
                    <table class="data-table table table-bordered">
                        <thead>
                        <th>#</th>
                        <th class="text-center">اسم المستخدم</th>
                        <th class="text-center">الهاتف</th>
                        <th class="text-center">الدولة</th>
                          <th class="text-center">الرصيد</th>
							 <th class="text-center">الحالة</th>
							<th class="text-center">الاجراءات</th>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->phone}}</td>                                                           <td class="text-center">{{$user->country}}</td>
                                <td class="text-center"><span  style="color:blue"> {{$user->balance}}</span> د.كــ</td>
								@if($user->activity==1)
								 <td class="text-center"><span  style="color:green"> مفعل</span></td>
								@else
								 <td class="text-center"><span  style="color:red"> معطل</span></td>
								@endif
					


								
                               
                                <td class="text-center">
                                    <a href="{{url(route("clients.edit",$user->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                               
                                    <form action="{{url(route("clients.destroy",$user->id)) }}" method="post" style="display: inline-block">
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
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif




        </div>


    </div><!-- end of box body -->





@endsection
