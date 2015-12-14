@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-tachometer"></i>
                    {{ trans('meters.meter_label', ['meter_number' => $meter->number]) }}
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('meters.commodity_label') }}: {!! trans('meters.commodity.' . $meter->type->code) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('meters.unit_label') }}: {!! trans('meters.unit.' . $meter->type->unit) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! link_to_action('Frontend\MetersController@edit', '', [$meter->id], ['class'=>'fa fa-edit btn btn-primary', 'title' => trans('crud.edit_button')]) !!}
                            {!! link_to_action('Frontend\MetersController@measurements', '', [$meter->id], ['class'=>'fa fa-terminal btn btn-primary', 'title' => trans('measurements.button_title')]) !!}
                        </div>
                    </div>
                </div>
            </div><!-- panel -->
        </div>
    </div>
@endsection