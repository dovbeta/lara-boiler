@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-9">
                            <i class="fa fa-building"></i>
                            {{ trans('flats.flat_label', ['flat_number' => $flat->number]) }}
                        </div>
                        <div class="col-md-3">
                            {!! link_to_action('Frontend\FlatsController@edit', '', [$flat->number], ['class'=>'fa fa-edit btn btn-primary pull-right', 'title' => trans('crud.edit_button')]) !!}
                            {!! link_to_action('Frontend\FlatsController@meters', '', [$flat->id], ['class'=>'fa fa-tachometer btn btn-primary pull-right', 'title' => trans('navs.meters')]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>{{ trans('crud.flats.area') }}:</dt>
                        <dd>{!! $flat->areaString() !!}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>{{ trans('crud.flats.rooms_number') }}:</dt>
                        <dd>{!! $flat->rooms_number !!}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>{{ trans('crud.flats.entrance') }}:</dt>
                        <dd>{!! $flat->entrance !!}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>{{ trans('crud.flats.floor') }}:</dt>
                        <dd>{!! $flat->floor !!}</dd>
                    </dl>
                    <p class="text-muted">
                        @if ($user)
                            {{ trans('strings.last_modified', ['last_modified' => $flat->updated_at, 'user_name' => $user->name]) }}
                        @endif
                    </p>
                </div>
            </div><!-- panel -->
        </div>
    </div>
@endsection