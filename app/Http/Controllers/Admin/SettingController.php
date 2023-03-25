<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Dashboard.settings.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Dashboard.settings.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('value'))
        {
            $data['value']=upload_image($request->file('value') , '_Slider_', 'slider');
        }
        else
        {
            $data['value'] = "defaults/slider.jpg";
        }
        $product = Setting::create($data);
        return $product ? redirect(route("settings.index")) : redirect("settings.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("Dashboard.settings.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("Dashboard.settings.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
