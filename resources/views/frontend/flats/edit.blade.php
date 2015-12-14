@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-building"></i>
                    {{ trans('flats.edit_label', ['number' => $flat->number]) }}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        {!! Form::model($flat,['action' => ['Frontend\FlatsController@update', $flat->id], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
                        <div class="form-group">
                            {!! Form::label('area', trans('flats.area_unit').':') !!}
                            {!! Form::text('area', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit(trans('crud.save_button'), ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div><!-- panel -->
        </div>
    </div>
@endsection