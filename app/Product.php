<?php namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

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
        'slug',
        'thongtin',
        'nghiencuu',
        'image'
    ];

    public function getRelated1Attribute()
    {
        return Post::whereHas('modules', function($q){
            $q->where('slug', 'thong-tin-san-pham-'.$this->id)
                ->orderBy('order');
        })->where('status', true)
            ->limit(6)
            ->get();
    }

    public function getRelated2Attribute()
    {
        return Post::whereHas('modules', function($q){
            $q->where('slug', 'nghien-cuu-san-pham-'.$this->id)
                ->orderBy('order');
        })->where('status', true)
            ->limit(6)
            ->get();
    }

    public function hotVideos()
    {
        return $this->hasMany('App\Video')
            ->where('hot', true)
            ->latest('updated_at');
    }

    public function getVlistAttribute()
    {
        return $this->hasMany('App\Video')
            ->latest('updated_at')
            ->paginate(6);
    }
}
