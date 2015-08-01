<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Category extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
        'unique'          => true,
        'on_update'       => true,
    );

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
        return $this->posts()->paginate(6);
    }


}
