@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i>
                    {{ trans('navs.flats') }}
                    @role('Administrator')
                        {!! link_to_action('Frontend\FlatsController@create', '', [], ['class'=>'fa fa-plus btn btn-primary', 'title' => trans('crud.add_button')]) !!}
                    @endauth
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-2">{{ trans('crud.flats.number') }}</th>
                            <th class="col-md-2">{{ trans('crud.flats.area') }}</th>
                            <th class="col-md-2">{{ trans('crud.flats.rooms_number') }}</th>
                            <th class="col-md-2">{{ trans('crud.flats.entrance') }}</th>
                            <th class="col-md-2">{{ trans('crud.flats.floor') }}</th>
                            <th class="col-md-2">{{ trans('crud.actions') }}</th>
                        </tr>
                        @foreach ($flats as $flat)
                            <tr>
                                <td>
                                    {!! link_to_action('Frontend\FlatsController@show', $flat->number, [$flat->number], ['class'=>'fa fa-building btn', 'title' => trans('crud.show_button')]) !!}
                                </td>
                                <td>{!! $flat->areaString() !!}</td>
                                <td>{!! $flat->rooms_number !!}</td>
                                <td>{!! $flat->entrance !!}</td>
                                <td>{!! $flat->floor !!}</td>
                                <td>
                                    {!! link_to_action('Frontend\FlatsController@show', '', [$flat->number], ['class'=>'fa fa-building btn btn-primary', 'title' => trans('crud.show_button')]) !!}
                                    {!! link_to_action('Frontend\FlatsController@edit', '', [$flat->number], ['class'=>'fa fa-edit btn btn-primary', 'title' => trans('crud.edit_button')]) !!}
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