<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clarifie;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ClarifiesController extends Controller
{
    public function allClarifies()
    {
        $clarifies = Clarifie::find(1);
        return view('admin.backend.clarifies.all_clarifies',compact('clarifies'));
    }

    public function updateClarifies(Request $request)
    {
        $clarifies_id = $request->id;
        $clarifies = Clarifie::find($clarifies_id);
        if($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_generate = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(302,618)->save(public_path('upload/clarifies/'.$name_generate));
            $save_url = 'upload/clarifies/'.$name_generate;
            if(file_exists(public_path($clarifies->image))) {
                @unlink(public_path($clarifies->image));
            }
            Clarifie::find($clarifies_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Данные успешно обновлены',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        } else {
            Clarifie::find($clarifies_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'Данные не были обновлены',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
    }
}
