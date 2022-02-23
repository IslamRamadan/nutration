
@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.service_galary")
@endsection
@section('mo')




@section('ti')
    @lang("site.service_galary")
@endsection



    <div class="box-body">


        <div class="box-header with-border">
            {!! Form::model("", ['route' => ['service_galaries.store',$id],
            "method"=>"post", 'enctype' => 'multipart/form-data'

            ])!!}
            {{ csrf_field() }}


            <div class="form-group" >
                <label> @lang('site.add_imgs')</label>
                <input type="file" name="img[]" multiple class="form-control"  required>
            </div>





            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> اضف</button>
            </div>

            {!! Form::close() !!}

        </div><!-- end of box body -->

    </div>

    <div class="box box-primary">







        <div class="box-body">


            <div class="table-responsive">
            <table class="table table-hover table table-bordered">

                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">@lang('site.img')</th>





                    <th class="text-center">@lang('site.action')</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($services as $service)


                    <tr>
                        <td>{{$loop->iteration}}</td>

                        <td class="text-center"> <img style="width:150px;height:100px" src="{{asset($service->img)}}" alt=""></td>




                        <td class="text-center">

                            <form action="{{url(route("service_galaries.destroy",$service->id)) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> حذف</button>
                            </form><!-- end of form -->

                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table><!-- end of table -->
            </div>




        </div><!-- end of box body -->

        @if(count($services)==0)
            <div class="alert alert-danger"> @lang('site.no_data')
            </div>
        @endif



    </div>





@endsection

