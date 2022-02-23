@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.add_rank")
@endsection
@section('mo')
@include('flash::message')
@inject('model','App\Role')
@inject('perm','App\Permission')
    @section('ti')
    @lang("site.add_rank")
@endsection


        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">




               {!! Form::model($model, ['route' => ['roles.store'],
               "method"=>"post"

               ])!!}



<div class="form-group">
 <label for="name">@lang("site.name")
</label>
 {!! Form::text('name',null,[
 'class' => 'form-control'
]) !!}
</div>
<div class="form-group">
 <label for="display_name">@lang("site.display_name")</label>
 {!! Form::text('display_name',null,[
 'class' => 'form-control'
]) !!}
</div>
<div class="form-group">
 <label for="description">@lang("site.description")</label>
 {!! Form::textarea('description',null,[
 'class' => 'form-control'
]) !!}
</div>
<div class="form-group">
 <label for="name">@lang("site.permissions")</label><br>
 <input id="select-all" type="checkbox">  <label for='select-all'> @lang("site.select_all")  </label>
 <br>
 <div class="row">
     @foreach($perm->all() as $permission)
         <div class="col-sm-3">
             <div class="checkbox">
                 <label>
                     <input type="checkbox" name="permissions_list[]" value="{{$permission->id}}"
                     @if($model->hasPermission($permission->name))
                         checked
                     @endif
                     >
                     {{$permission->display_name}}
                 </label>
             </div>
         </div>
     @endforeach
 </div>
</div>
<div class="form-group">
 <button class="btn btn-primary" type="submit"> @lang("site.save")</button>
</div>


@push('scripts')
 <script>
     $("#select-all").click(function(){
         $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
     });

 </script>
@endpush




             {!! Form::close () !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->





     






   

@endsection
