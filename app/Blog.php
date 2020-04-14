<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['user_id','category_id','title','slug','body','image'];


     public function user (){
        return $this->belongsTo(User::class);
    }

     public function category()
    {
        return $this->belongsTo(Category::class);
    }

 /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($blog) {
            $blog->update(['slug' => $blog->title]);
        });
    }

     /**
     * Set the proper slug attribute
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = str_slug($value))->exists()) {

            $slug = "{$slug}-{$this->id}";

        }
        $this->attributes['slug'] = $slug;
    }

     public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function getUrlAttribute (){

      return route("backend.blogs.show",$this->slug);

    }

    public function getDateAttribute (){

        return   $this->created_at->toFormattedDateString();

    }
 public function getBodyHtmlAttribute()
    {
        return $this->bodyHtml();
    }


    public function getExcerptAttribute (){

        return str_limit( strip_tags($this->bodyHtml()),250);
    }

    public function bodyHtml(){

        return \Parsedown::instance()->text($this->body);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if (!is_null($this->image)) {
            $imagePath = base_path()  . '/public/img/' . $this->image;
            if (file_exists($imagePath))  $imageUrl = asset("img/" . $this->image);
        }
        return   $imageUrl;
    }
    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $ext    = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = base_path() . '/public/img/'  . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("img/" . $thumbnail);
        }

        return $imageUrl;
    }


    public function scopeFilter($query, $term)
    {
    // check if any term entered
        if ($term)
        {
        $query->where(function($q) use ($term) {
//
                        $q->orWhere('title', 'LIKE', "%{$term}%");
                        $q->orWhere('body', 'LIKE', "%{$term}%");
                    });
                }

            }


}
