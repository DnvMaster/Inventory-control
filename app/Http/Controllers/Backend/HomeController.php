<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class HomeController extends Controller
{
    public function allFeature()
    {
        $features = Feature::latest()->get();
        return view('admin.backend.feature.all_feature', compact('features'));
    }

    public function addFeature()
    {
        return view('admin.backend.feature.add_feature');
    }

    public function storeFeature(Request $request)
    {
        Feature::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Данные были успешно добавлены',
            'alert-type' => 'success',
        );
        return redirect()->route('all.feature')->with($notification);
    }
}
