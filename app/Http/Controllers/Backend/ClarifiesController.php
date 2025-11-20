<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clarifie;

class ClarifiesController extends Controller
{
    public function allClarifies()
    {
        $clarifies = Clarifie::find(1);
        return view('admin.backend.clarifies.all_clarifies',compact('clarifies'));
    }
}
