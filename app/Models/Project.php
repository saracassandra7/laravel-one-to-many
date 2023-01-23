<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'client_name', 'summary', 'cover_image', 'image_original_name'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $exists = Project::where('slug',$slug)->first();
        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Project::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
