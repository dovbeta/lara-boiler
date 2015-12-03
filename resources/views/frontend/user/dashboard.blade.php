@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('navs.dashboard') }}</div>

				<div class="panel-body">
					<div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i> {{ trans('navs.my_information') }}</a></li>
                        @if ($flat)
                            <li role="presentation" class=""><a href="#flat" aria-controls="flat" role="tab" data-toggle="tab"><i class="fa fa-building"></i> {{ trans('flats.flat_label', ['flat_number' => $flat->number]) }}</a></li>
                        @endif
                      </ul>

                      <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <table class="table table-striped table-hover table-bordered dashboard-table">
                                <tr>
                                    <th class="col-md-2">{{ trans('validation.attributes.name') }}</th>
                                    <td class="col-md-8">{!! $user->name . ' ' . $user->last_name !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('validation.attributes.email') }}</th>
                                    <td>{!! $user->email !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('validation.attributes.created_at') }}</th>
                                    <td>{!! $user->created_at !!} ({!! $user->created_at->diffForHumans() !!})</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('validation.attributes.last_updated') }}</th>
                                    <td>{!! $user->updated_at !!} ({!! $user->updated_at->diffForHumans() !!})</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('validation.attributes.actions') }}</th>
                                    <td>
                                        <a href="{!!route('frontend.profile.edit')!!}" class="btn btn-primary btn-xs">{{ trans('labels.edit_information') }}</a>
                                        <a href="{!!url('auth/password/change')!!}" class="btn btn-warning btn-xs">{{ trans('navs.change_password') }}</a>
                                    </td>
                                </tr>
                            </table>
                        </div><!--tab panel profile-->

                          @if ($flat)
                        <div role="tabpanel" class="tab-pane" id="flat">
                            <table class="table table-striped table-hover table-bordered dashboard-table">
                                <tr>
                                    <th class="col-md-2">{{ trans('flats.area') }}</th>
                                    <td class="col-md-8">{!! $flat->areaString()  !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('flats.rooms_number') }}</th>
                                    <td>{!! $flat->rooms_number !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('flats.entrance') }}</th>
                                    <td>{!! $flat->entrance !!}</td>
                                </tr>
                                <tr>
                                    <th>{{ trans('flats.floor') }}</th>
                                    <td>{!! $flat->floor !!}</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        {!! link_to_action('Frontend\FlatsController@meters', '', [$flat->id], ['class'=>'fa fa-tachometer btn btn-primary', 'title' => trans('navs.meters')]) !!}
                                    </td>
                                </tr>
                            </table>
                        </div><!--tab panel flat-->
                          @endif

                      </div><!--tab content-->

                    </div><!--tab panel-->

				</div><!--panel body-->

			</div><!-- panel -->

		</div><!-- col-md-10 -->

	</div><!-- row -->
@endsection