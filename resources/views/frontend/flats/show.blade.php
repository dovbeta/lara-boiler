@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-building"></i>
                    {{ trans('flats.flat_label', ['flat_number' => $flat->number]) }}
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('crud.flats.rooms_number') }}: {!! $flat->rooms_number !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('crud.flats.entrance') }}: {!! $flat->entrance !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('crud.flats.floor') }}: {!! $flat->floor !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('crud.flats.area') }}: {!! $flat->area !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! link_to_action('Frontend\FlatsController@edit', '', [$flat->number], ['class'=>'fa fa-edit btn btn-primary', 'title' => trans('crud.edit_button')]) !!}
                        </div>
                    </div>
                </div>
            </div><!-- panel -->
        </div>
    </div>
@endsection