<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function setting()
    {
        return view('dashboard.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,Setting $setting)
    {
        $data = [
            'favicon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'nullable|email',

        ];

        foreach (config('app.languages') as $key => $value) {
            $data[$key.'*.title'] = 'nullable|string';
            $data[$key.'*.content'] = 'nullable|string';
            $data[$key.'*.address'] = 'nullable|string';
        }
        $request->validate($data);
        $setting->update($request->all());
        $favicon = $request->file('favicon');
        $logo = $request->file('logo');

        // rename file or images by get the origin name of it predefine by stocastic number.
        $faviconName = rand(100000,999999) . time() . $favicon->getClientOriginalName();
        $logoName = rand(100000,999999) . time() . $favicon->getClientOriginalName();

        // store image [favicon and logo] in settings directory by orgin name of it
        $pathfavicon = $favicon->storeAs('settings', $faviconName, 'blog');
        $pathlogo = $logo->storeAs('settings', $logoName, 'blog');

        // there is another way for store image
        // by get file => $image = $request->file("name");
        // get getClientOriginalName of it
        // and make this command ==> $image = move(public_path('foldername'), name_of_path)


        $setting->update([
            'logo' => $pathlogo,
            'favicon' => $pathfavicon
        ]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
