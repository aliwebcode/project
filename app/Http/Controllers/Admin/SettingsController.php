<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    public function index() {
        $settings = Setting::first();
        return view('admin.settings.homepage',compact('settings'));
    }
    public function update_homepage(Request $request) {
        $data = $request->only('welcome_msg', 'about_us', 'about_us_image', 'logo', 'hero_image');
        if ($request->hasFile('logo')) {
            if (File::exists('images/logo.png')) {
                File::delete('images/logo.png');
            }
            $image = $request->file('logo');
            $image->move('assets/images/', "logo.png");
            $data['logo'] = "logo.png";
        }
        if ($request->hasFile('hero_image')) {
            $hero_image = $request->file('hero_image');
            $filename = $hero_image->getClientOriginalName();
            $newName = uniqid() . '-' . now()->timestamp . $filename;
            $hero_image->move('assets/images/', $newName);
            $data['hero_image'] = $newName;
        }
        if ($request->hasFile('about_us_image')) {
            $about_us_image = $request->file('about_us_image');
            $filename = $about_us_image->getClientOriginalName();
            $newName = uniqid() . '-' . now()->timestamp . $filename;
            $about_us_image->move('assets/images/', $newName);
            $data['about_us_image'] = $newName;
        }
        $settings = Setting::first();
        if(!$settings)
            $settings = Setting::create($data);
        else
            $settings->update($data);
        return redirect()->back()->with('msg','تم حفظ التعديلات');
    }
    public function contact() {
        $settings = Setting::first();
        return view('admin.settings.contact',compact('settings'));
    }
    public function update_contact(Request $request) {
        $data = $request->only('phone', 'email', 'address', 'facebook', 'twitter', 'instagram');
        $settings = Setting::first();
        if(!$settings)
            $settings = Setting::create($data);
        else
            $settings->update($data);
        return redirect()->back()->with('msg','تم حفظ التعديلات');
    }
}
