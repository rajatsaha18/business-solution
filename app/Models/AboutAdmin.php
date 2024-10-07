<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutAdmin extends Model
{
    use HasFactory;
    private static $about;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'about-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newAbout($request)
    {
        self::$about = new AboutAdmin();
        self::$about->description   = $request->description;
        self::$about->image         = self::getImageUrl($request->file('image'));
        self::$about->status        = $request->status;
        self::$about->save();
    }

    public static function updateAbout($id,$request)
    {
        self::$about = AboutAdmin::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$about->image;
        }
        self::$about->description   = $request->description;
        self::$about->image         = self::$imageUrl;
        self::$about->status        = $request->status;
        self::$about->save();


    }

    public static function deleteAbout($id)
    {
        self::$about = AboutAdmin::find($id);
        if(file_exists(self::$about->image))
        {
            unlink(self::$about->image);
        }
        self::$about->delete();
    }

}

