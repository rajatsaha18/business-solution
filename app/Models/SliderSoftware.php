<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderSoftware extends Model
{
    use HasFactory;
    private static $slider;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'software-slider-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSlider($request)
    {
        self::$slider = new SliderSoftware();
        self::$slider->title        = $request->title;
        self::$slider->image        = self::getImageUrl($request->file('image'));
        self::$slider->status       = $request->status;
        self::$slider->save();
    }

    public static function updateSlider($request, $id)
    {
        self::$slider = SliderSoftware::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$slider->image;
        }
        self::$slider->title        = $request->title;
        self::$slider->image        = self::$imageUrl;
        self::$slider->status       = $request->status;
        self::$slider->save();
    }

    public static function deleteSlider($id)
    {
        self::$slider = SliderSoftware::find($id);
        if(file_exists(self::$slider->image))
        {
            unlink(self::$slider->image);
        }
        self::$slider->delete();
    }
}
