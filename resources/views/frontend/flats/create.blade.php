@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-building"></i>
                    {{ trans('flats.add_flat_label') }}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        {!! Form::open(['action' => 'Frontend\FlatsController@store', 'class' => 'form-horizontal']) !!}
                            @include('frontend.flats.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>

            </div><!-- panel -->
        </div>
    </div>
@endsection