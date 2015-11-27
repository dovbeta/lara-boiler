<div class="form-group">
    {!! Form::label('number', trans('flats.number').':') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rooms_number', trans('flats.rooms_number').':') !!}
    {!! Form::text('rooms_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('entrance', trans('flats.entrance').':') !!}
    {!! Form::text('entrance', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('floor', trans('flats.floor').':') !!}
    {!! Form::text('floor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('area', trans('flats.area').':') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit(trans('crud.save_button'), ['class' => 'btn btn-primary form-control']) !!}
</div>
