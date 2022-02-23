
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.governs")
@endsection
@section('mo')
    

     @inject('country','App\Models\Country')


     @section('ti')
        المحافظات والتوصيل
     @endsection



    <div class="  " style="padding:10px">

            <a href="{{ route('governs.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">
 
			     <div class="box-header with-border">



                <form action="{{ route('governs.index') }}" method="get">

                    <div class="row">

                        
                            

                            <div class="form-group col-md-6">
                           
                            {!! Form::select('country_id',$country->pluck('name','id')->toArray(),null,[
                                'class' => 'form-control form-control-lg' . ($errors->has('category_id') ? ' is-invalid' : null),
                                 'id' => '',
                                 'placeholder' => 'اختر الدولة',
                               
    
                             ]) !!}
    
                        </div>
                       

                       

                        <div class="col-md-6" style="margin-top:5px ">
                            <button  type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> @lang('site.search')</button>



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
                            <th class="text-center">@lang('المحافظة')</th>
			                <th class="text-center">@lang('المحافظة بالانجليزية')</th>

							            <th class="text-center">@lang('الدولة')</th>

                            <th class="text-center">@lang('سعر التوصيل')</th>
                            <th class="text-center">@lang('الحالة')</th>
                            <th class="text-center">@lang('الترتيب')</th>

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($governs as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{$category->name}}</td>
						     <td class="text-center">{{$category->name_en}}</td>

					 <td class="text-center">{{\App\Models\Country::find($category->country_id)->name ?? " "}}</td>

                            <td class="text-center">{{$category->price}}  {{$my_setting->currency}} </td>

                            <td class="text-center">{{$category->activity==1?"مفعل":"معطل"}}</td>
                            <td class="text-center">{{$category->num}}</td>


                                <td class="text-center">

                                        <a href="{{url(route("governs.edit",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                               
                                <form action="{{url(route("governs.destroy",$category->id)) }}" method="post" style="display: inline-block">
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

                    {{ $governs->appends(request()->query())->links() }}
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($governs)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif










  

@endsection
