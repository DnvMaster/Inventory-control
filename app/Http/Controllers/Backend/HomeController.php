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

    public function editFeature($id)
    {
        $feature = Feature::find($id);
        return view('admin.backend.feature.edit_feature',compact('feature'));
    }

    public function updateFeature(Request $request)
    {
        $feature_id = $request->id;
        Feature::find($feature_id)->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);
        $notification = array(
            'message' => 'Данная функция успешно обновлена.',
            'alert-type' => 'success',
        );
        return redirect()->route('all.feature')->with($notification);
    }

    public function deleteFeature($id)
    {
        Feature::find($id)->delete();
        $notification = array(
            'message' => 'Данные успешно удалены',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
