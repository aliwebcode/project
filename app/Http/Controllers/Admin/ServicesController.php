<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function index() {
        $services = Service::latest()->get();
        return view('admin.services.index',compact('services'));
    }
    public function add() {
        return view('admin.services.add');
    }
    public function store(Request $request) {
        $data = $request->only('title', 'image', 'text');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $newName = uniqid() . '-' . now()->timestamp . $filename;
            $image->move('assets/images/services/', $newName);
            $data['image'] = $newName;
        }
        $service = Service::create($data);
        return redirect()->back()->with('msg', 'تمت الإضافة بنجاح');
    }
    public function delete($id) {
        $service = Service::findOrFail($id);
        if(File::exists('assets/images/services/'.$service->image)) {
            File::delete('assets/images/services/'.$service->image);
        }
        $service->delete();
        return redirect()->route('services');
    }
}
