@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل قسم")
@endsection
@section('mo')




     @section('ti')
         تعديل تاجر
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['categories.update',$category->id],
                  "method"=>"PUT",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}



                <div class="form-group col-md-6">
                    <label> حساب التاجر</label>
                    <select style="width:100%"  name="user_id" class="form-control " >

                        @foreach($vendors as $vendor)

                            @if($category->user_id == $vendor->id )
                                <option value="{{$vendor->id}}" selected>
                                    {{$vendor->name}}
                                </option>
                                @else
                                <option value="{{$vendor->id}}">
                                    {{$vendor->name}}
                                </option>
                                @endif

                        @endforeach
                    </select>
                </div>

                        <div class="form-group col-md-6">
                            <label>@lang('التاجر')</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}"  required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('التاجر بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ $category->name_en }}" required>
                        </div>

                        <div class="form-group col-md-6">
                        <label>@lang('لوجو التاجر  ')</label>
                        <input type="file" name="photo" class="form-control" value="">
                    </div>

                     <div class="form-group col-md-6 ">
                            <label>@lang(' صورة الاعلان  ')</label>
                            <input type="file" name="photo2" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang(' الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                                <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">مفعلة</option>
                                <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">معطلة</option>

                        </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('ترتيب الظهور')</label>
                            <input  type="number" name="num" class="form-control" value="{{ $category->num }}">
                        </div>

<br>
                    <div class="form-group col-md-12">
                     <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
