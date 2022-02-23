
<div class="form-group">
    <label for="name">@lang("site.name")</label>
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
    <input id="select-all" type="checkbox"><label for='select-all'>@lang("site.select_all")</label>
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
