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
                            {{ trans('crud.meters.commodity') }}: {!! trans('meters.commodity.' . $meter->commodity) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! link_to_action('Frontend\MetersController@edit', '', [$meter->id], ['class'=>'fa fa-edit btn btn-primary', 'title' => trans('crud.edit_button')]) !!}
                        </div>
                    </div>
                </div>
            </div><!-- panel -->
        </div>
    </div>
@endsection