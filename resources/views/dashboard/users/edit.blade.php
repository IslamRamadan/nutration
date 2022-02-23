@extends('layouts.dashboard.app2')
@section('title')
@lang("site.edit_user")
@endsection
@section('mo')
@include('flash::message')
@inject("role","App\Role")

    @section('ti')
@lang("site.edit_user")
@endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">




               {!! Form::model($user, ['route' => ['users.update',$user->id],
               "method"=>"put"

               ])!!}




<?php
$roles = $role->pluck('display_name', 'id')->toArray();
?>

<div class="form-group">
    <label for="name">@lang("site.name")
</label>
    {!! Form::text('name',null,[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="email">@lang("site.email")
</label>
    {!! Form::text('email',null,[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="password">@lang("site.password")
</label>
  
 <input type="password" class="form-control" name="password">
</div>
<div class="form-group">
    <label for="password_confirmation">@lang("site.password_confirmation")
</label>
    {!! Form::password('password_confirmation',[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="roles_list">@lang("site.users_arrangment")</label>
    {!! Form::select('roles_list[]',$roles,null,[
    'class' => 'form-control select2',
    'multiple' => 'multiple',
 ]) !!}
</div>

<div class="form-group">
 <button class="btn btn-primary" type="submit"> @lang("site.save")</button>
</div>







             {!! Form::close () !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












   

@endsection
