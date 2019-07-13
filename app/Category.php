<?php namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Category extends Model {
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
                'source' => 'name'
            ]
        ];
    }
	protected $fillable = [
        'name',
        'parent_id',
        'slug',
    ];

    /**
     * parent of this category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    /**
     * sub of this category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany('App\Category', 'parent_id', 'id');

    }

    public function getHomepageAttribute()
    {
        if ($this->parent_id || $this->subCategories()->count() == 0) {
            return Post::where('status', true)->where('category_id', $this->id)->whereHas('modules', function ($query) {
                $query->where('slug', 'chuyen-muc-trang-chu');
            })->limit(3)->get();
        } else {
            $subCategories = $this->subCategories()->pluck('id')->all();
            return Post::where('status', true)->whereIn('category_id', $subCategories)->whereHas('modules', function ($query) {
                $query->where('slug', 'chuyen-muc-trang-chu');
            })->limit(3)->get();

        }
    }


    public function homepagePosts()
    {
        return $this->hasMany('App\Post')->where('status', true)->whereHas('modules', function ($query) {
            $query->where('modules.slug', '=', 'chuyen-muc-trang-chu');
        })->limit(3);
    }
    /**
     * category have many posts.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
       return $this->hasMany('App\Post')->where('status', true);
    }

    public function getPaginateAttribute()
    {
        if ($this->parent_id || $this->subCategories()->count() == 0) {
            return $this->posts()->paginate(6);
        } else {
            return $this->subCategories()->first()->posts()->paginate(6);
        }

    }
    public function getCitiesAttribute()
    {
        if ($this->parent_id) {
            return $this->posts()->where('category_id', $this->id)->get();
        } else {
            return;
        }

    }


}
