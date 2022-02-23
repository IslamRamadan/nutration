
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')
    



     @section('ti')
        الماركات 
     @endsection



    <div class="  " style="padding:10px">

            <a href="{{ route('brands.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">



        



            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                          .
                            <th class="text-center">@lang('الماركة ')</th>
                            <th class="text-center">@lang('الصورة ')</th>
                            <th class="text-center">@lang('الحالة')</th>
                            <th class="text-center">@lang('الترتيب')</th>

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$category->text}}</td>

                            <td class="text-center"><img src="{{ asset($category->img) }}" alt="" width="90px" height="70px">  </td>
                            <td class="text-center">{{$category->activity==1?"مفعل":"معطل"}}</td>
                            <td class="text-center">{{$category->num}}</td>


                                <td class="text-center">

                                        <a href="{{url(route("brands.edit",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                               
                                <form action="{{url(route("brands.destroy",$category->id)) }}" method="post" style="display: inline-block">
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
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif










  

@endsection
