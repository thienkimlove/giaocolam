<?php namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {

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
                'source' => 'question'
            ]
        ];
    }

	protected $fillable = ['question', 'answer', 'slug', 'answer_person', 'ask_person', 'ask_phone', 'ask_email', 'ask_address', 'image', 'display'];

}
