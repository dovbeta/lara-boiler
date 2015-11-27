{!! Form::hidden('flat_id', $flat->id) !!}
<div class="form-group">
    {!! Form::label('number', trans('meters.number').':') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('number', trans('meters.commodity_label').':') !!}
    {!! Form::select('commodity', [
        'heating' => trans('meters.commodity.heating'),
        'hot_water' => trans('meters.commodity.hot_water'),
        'cold_water' => trans('meters.commodity.cold_water')
        ], null, ['placeholder' => trans('meters.commodity_placeholder'), 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit(trans('crud.save_button'), ['class' => 'btn btn-primary form-control']) !!}
</div>
