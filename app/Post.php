<?php namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


class Post extends Model {

    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'desc',
        'content',
        'image',
        'city',
        'status',
        'tieude'
    ];

    /**
     * post belong to one category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * like tags.
     * @param $query
     * @param $tag
     * @return mixed
     */
    public function scopeTagged($query, $tag)
    {
        if (strlen($tag) > 2) {
            $query->where('title', 'LIKE', '%'.$tag.'%');
        }
    }

    /**
     * get the tags that associated with given post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * get the list tags of current post.
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->pluck('name')->all();
    }

    /**
     * To solve problem with return empty object and cannot using format() method on published_at.
     * @param $date
     * @return Carbon
     */
    public function getUpdatedAtAttribute($date){
        return Carbon::parse($date)->format('d-m-Y');
    }

    public function modules()
    {
        return $this->hasMany('App\Module');
    }

    public function getRelatedAttribute()
    {
        return Post::where('category_id', $this->category_id)
             ->where('id', '!=', $this->id)
             ->where('status', true)
             ->get();
    }

}
