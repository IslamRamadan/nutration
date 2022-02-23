@include('partials.validation_errors')
@include('flash::message')
@inject('role','App\Models\Role')
<?php
$roles = $role->pluck('display_name', 'id')->toArray();
?>

<div class="form-group">
    <label for="name">@lang("site.name")</label>
    {!! Form::text('name',null,[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="email">@lang("site.email")</label>
    {!! Form::text('email',null,[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="password">@lang("site.password")</label>
    {!! Form::password('password',[
    'class' => 'form-control'
 ]) !!}
</div>
<div class="form-group">
    <label for="password_confirmation">@lang("site.pasword_confirmation")</label>
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




