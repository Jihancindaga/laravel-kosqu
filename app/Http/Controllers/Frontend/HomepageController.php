<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function  index()
    {
        $sliders = Slider::get();
        $testimoni = Testimonial::get();
        //$testimonials = testimonial::get();


        return view('frontend.homepage', compact('sliders', 'testimoni'));
    }
}
