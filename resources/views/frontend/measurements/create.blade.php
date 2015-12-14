@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-tachometer"></i>
                    {{ trans('meters.add_label', ['flat_number' => $flat->number]) }}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        {!! Form::open(['action' => 'Frontend\MetersController@store', 'class' => 'form-horizontal']) !!}
                            @include('frontend.meters.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>

            </div><!-- panel -->
        </div>
    </div>
@endsection