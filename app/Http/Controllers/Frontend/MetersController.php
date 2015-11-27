<?php

namespace App\Http\Controllers\Frontend;

use App\Flat;
use App\Http\Requests\Frontend\StoreMeterRequest;
use App\Meter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class MetersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $meters = Meter::orderBy('number')->get();
        $flatId = false;
        return view('frontend.meters.index', compact('meters', 'flatId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($flatId)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMeterRequest $request
     * @return Response
     */
    public function store(StoreMeterRequest $request)
    {
        $flat = Flat::findOrFail($request->get('flat_id'));
        $meter = new Meter;
        $meter->flat_id = $flat->id;
        $meter->number = $request->get('number');
        $meter->commodity = $request->get('commodity');
        $meter->save();
        return redirect()->action('Frontend\FlatsController@meters', $request->get('flat_id'))->withFlashSuccess(trans('alerts.meters.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $meter = Meter::findOrFail($id);
        return view('frontend.meters.show', compact('meter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $meter = Meter::findOrFail($id);
        $flat = Flat::findOrFail($meter->flat_id);
        return view('frontend.meters.edit', compact('meter', 'flat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreMeterRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreMeterRequest $request, $id)
    {
        $meter = Meter::findOrFail($id);
        $meter->update($request->all());

        return redirect()->action('Frontend\FlatsController@meters', $request->get('flat_id'))->withFlashSuccess(trans('alerts.meters.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
