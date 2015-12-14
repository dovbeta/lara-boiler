@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i>
                    {{ trans('measurements.label', ['meter_number' => $meter->number, 'flat_number' => $meter->flat->number, 'commodity' => trans('meters.commodity.'.$meter->type->code)]) }}
                    {!! link_to_action('Frontend\MetersController@addMeasurement', '', [$meter->id], ['class'=>'fa fa-plus btn btn-primary', 'title' => trans('crud.add_button')]) !!}
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-2">{{ trans('measurements.updated_at') }}</th>
                            <th class="col-md-2">{{ trans('measurements.updated_by') }}</th>
                            <th class="col-md-2">{{ trans('measurements.value') }}</th>
                        </tr>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <td>
                                    {!! $measurement->updated_at !!}
                                </td>
                                <td>
                                    {!! $measurement->user->name !!}
                                </td>
                                <td>
                                    {!! $measurement->value !!}
                                </td>
                            </tr>
                        @endforeach
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!-- panel -->
        </div>
    </div>
@endsection