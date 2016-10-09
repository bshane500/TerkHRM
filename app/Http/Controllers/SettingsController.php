<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\SettingRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
class SettingsController extends Controller
{
    protected $setting;

    /**
     * SettingsController constructor.
     * @param SettingRepository $setting
     */
    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = $this->setting->firstOrNew();
        return view('settings.settings',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->setting->newSettings($request->all());
        return redirect(route('settings.index'))->with('status','Settings Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->setting->updateSettings($request->all(),$id);
        return redirect(route('settings.index'))->with('status','Settings Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
