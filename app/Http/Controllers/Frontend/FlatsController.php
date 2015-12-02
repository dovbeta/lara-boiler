<?php

namespace App\Http\Controllers\Frontend;

use App\Flat;
use App\Http\Requests\Frontend\Flat\StoreFlatRequest;
use App\Meter;
use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('osbb', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flats = Flat::orderBy(DB::raw('CAST(number as SIGNED INTEGER)'))->get();
        return view('frontend.flats.index', compact('flats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.flats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFlatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlatRequest $request)
    {
        $this->validate($request, ['number' => 'unique:flats']);
        Flat::create($request->all());
        return redirect('flats')->withFlashSuccess(trans('alerts.flats.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $number
     * @return \Illuminate\Http\Response
     */
    public function show($number)
    {
        $flat = Flat::where('number', '=', $number)->first();
        if (!$flat)
            throw (new ModelNotFoundException);
        $user = User::find($flat->updated_by);
        return view('frontend.flats.show', compact('flat', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $number
     * @return \Illuminate\Http\Response
     */
    public function edit($number)
    {
        $flat = Flat::where('number', '=', $number)->first();
        if (!$flat)
            throw (new ModelNotFoundException);
        return view('frontend.flats.edit', compact('flat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreFlatRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFlatRequest $request, $id)
    {
        $flat = Flat::findOrFail($id);
        $flat->updated_by = 1;
        $flat->update($request->all());
        return redirect()->action('Frontend\FlatsController@show', $flat->number)->withFlashSuccess(trans('alerts.flats.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        $flat = Flat::findOrFail($id);
        $flat->destroy();
        return redirect('flats')->withFlashSuccess(trans('alerts.flats.deleted'));
    }

    /**
     * @param int $flatId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function meters($flatId)
    {
        $meters = Meter::where('flat_id', '=', $flatId)->orderBy('number')->get();
        return view('frontend.meters.index', compact(['meters', 'flatId']));
    }

    public function addMeter($flatId)
    {
        $flat = Flat::findOrFail($flatId);
        return view('frontend.meters.create', compact('flat'));
    }

}
