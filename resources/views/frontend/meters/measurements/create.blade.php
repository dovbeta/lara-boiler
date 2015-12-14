@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa terminal"></i>
                    {{ trans('measurements.add_label', ['meter_number' => $meter->number, 'commodity' => trans('meters.commodity.' . $meter->commodity)]) }}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        {!! Form::open(['class' => 'form-horizontal']) !!}
                            @include('frontend.meters.measurements.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>

            </div><!-- panel -->
        </div>
    </div>
@endsection