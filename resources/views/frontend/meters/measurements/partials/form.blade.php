<div class="form-group">
    {!! Form::label('value', trans('measurements.current_value').':') !!}
    {!! Form::text('value', 0, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit(trans('crud.save_button'), ['class' => 'btn btn-primary form-control']) !!}
</div>
