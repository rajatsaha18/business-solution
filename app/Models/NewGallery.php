<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewGallery extends Model
{
    use HasFactory;
    private static $gallery;
    private static $imageName;
    private static $directory;
    private static $imageUrl;


    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'gallery-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newGallery($request)
    {
        self::$gallery = new NewGallery();
        self::$gallery->image         = self::getImageUrl($request->file('image'));
        self::$gallery->status        = $request->status;
        self::$gallery->save();
    }

    public static function updateGallery($request,$id)
    {
        self::$gallery = NewGallery::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$gallery->image))
            {
                unlink(self::$gallery->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$gallery->image;
        }
        self::$gallery->image         = self::$imageUrl;
        self::$gallery->status        = $request->status;
        self::$gallery->save();
    }

    public static function deleteGallery($id)
    {
        self::$gallery = NewGallery::find($id);
        if(file_exists(self::$gallery->image))
        {
            unlink(self::$gallery->image);
        }
        self::$gallery->delete();
    }
}
