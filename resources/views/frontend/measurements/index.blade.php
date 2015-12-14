@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i>
                    {{ trans('navs.measurements') }}
                    @if ($meter)
                        {!! link_to_action('Frontend\MetersController@addMeasurement', '', [$meter->id], ['class'=>'fa fa-plus btn btn-primary', 'title' => trans('crud.add_button')]) !!}
                    @endif
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-2">{{ trans('crud.meters.number') }}</th>
                            <th class="col-md-2">{{ trans('crud.meters.commodity') }}</th>
                            <th class="col-md-2">{{ trans('crud.meters.flat_number') }}</th>
                            <th class="col-md-2">{{ trans('crud.actions') }}</th>
                        </tr>
                        @foreach ($meters as $meter)
                            <tr>
                                <td>
                                    {!! link_to_action('Frontend\MetersController@show', $meter->number, [$meter->id], ['class'=>'fa fa-tachometer btn', 'title' => trans('crud.show_button')]) !!}
                                </td>
                                <td>{!! trans('meters.commodity.' . $meter->commodity) !!}</td>
                                <td>
                                    {!! link_to_action('Frontend\FlatsController@show', $meter->flat->number, [$meter->flat->number], ['class'=>'fa fa-building btn', 'title' => trans('crud.show_button')]) !!}
                                </td>
                                <td>
                                    {!! link_to_action('Frontend\MetersController@show', '', [$meter->id], ['class'=>'fa fa-building btn btn-primary', 'title' => trans('crud.show_button')]) !!}
                                    {!! link_to_action('Frontend\MetersController@edit', '', [$meter->id], ['class'=>'fa fa-edit btn btn-primary', 'title' => trans('crud.edit_button')]) !!}
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