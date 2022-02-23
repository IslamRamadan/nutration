@extends('layouts.dashboard.app2')
@section('title')
@lang("السليدر")@endsection
@section('mo')
    



     @section('ti')
   السليدر :   {{ App\Models\Category::find($id)->name??"" }}
     @endsection
  <div class="  " style="padding:10px">


    <div class="box-body">

        @include('partials._errors')

        <div class="box-header with-border">
           {!! Form::model("", ['route' => ['slider.vendor.store',$id],
           "method"=>"post", 'enctype' => 'multipart/form-data'

           ])!!}
             {{ csrf_field() }}


                 <div class="form-group" >
                     <label>@lang('  ارفاق الصور')  (صورة او اكثر)</label>
                     <input type="file" name="img[]" multiple class="form-control"  required>
                 </div>


               


             <div class="form-group">
                 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('اضف')</button>
             </div>

             {!! Form::close() !!}

     </div><!-- end of box body -->

  </div>


      <div class="box box-primary">



         



          <div class="box-body">



                    <table class="table table-hover table table-bordered">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang(' الصورة')</th>

                          



                            <th class="text-center">@lang('الاجراءات')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)


                            <tr>
                                <td>{{$loop->iteration}}</td>

                            <td class="text-center"> <img style="width:150px;height:100px" src="{{asset($post->img)}}" alt="{{$post->title}}"></td>




                                <td class="text-center">

                                <form action="{{url(route("slider.vendor.destroy",$post->id)) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
                                        </form><!-- end of form -->

                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table><!-- end of table -->





            </div><!-- end of box body -->

            @if(count($posts)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif



        </div>





   

@endsection
