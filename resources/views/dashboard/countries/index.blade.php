
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.countries")
@endsection
@section('mo')
    



     @section('ti')
         الدول
     @endsection



    <div class="  " style="padding:10px">

            <a href="{{ route('countries.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">



            <div class="box-header with-border">




            </div><!-- end of box header -->



            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang('الدولة')</th>
                            <th class="text-center">@lang('الدولة بالانجليزية')</th>
                            <th class="text-center">@lang('الحالة')</th>
                            <th class="text-center">@lang('الرمز')</th>
                            <th class="text-center">@lang('العملة')</th>

                            <th class="text-center">@lang('المفتاح')</th>
                        

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $category)

                            <tr>
                                <td>{{$loop->iteration}}</td>

                            <td class="text-center">{{$category->name}}</td>
                            <td class="text-center">{{$category->name_en}}</td>
                            <td class="text-center">{{$category->activity==1?"مفعل":"معطل"}}</td>
                            <td class="text-center">{{$category->code}}</td>
                          <td class="text-center">{{$category->currency}}</td>

                            <td class="text-center">{{$category->phone_code}}</td>
					      




                                <td class="text-center">

                                        <a href="{{url(route("countries.edit",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                               
                                <form action="{{url(route("countries.destroy",$category->id)) }}" method="post" style="display: inline-block">
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

                    
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($data)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif










  

@endsection
