<?php

/**
 * Pages
 *
 * @property integer $id
 * @property integer $parent_id
 * @property boolean $is_published
 * @property boolean $position
 * @property string $alias
 * @property string $menu_title
 * @property string $title
 * @property string $introtext
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $published_at
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @method static \Illuminate\Database\Query\Builder|\Page whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereParentId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereIsPublished($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page wherePosition($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereAlias($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereMenuTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereIntrotext($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereContent($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereUpdatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page wherePublishedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereMetaTitle($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereMetaDesc($value) 
 * @method static \Illuminate\Database\Query\Builder|\Page whereMetaKey($value) 
 */
class Pages extends SleepingOwl\Models\SleepingOwlModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    protected  $fillable = [
	    'parent_id',
	    'is_published',
	    'position',
	    'alias',
	    'menu_title',
	    'title',
	    'introtext',
	    'is_container',
	    'content',
	    'published_at',
	    'meta_title',
	    'meta_desc',
	    'meta_key'
    ];

    public function children()
    {
        return $this->hasMany('Pages', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Pages', 'parent_id');
    }

    public static function getPageByAlias($alias = '/') {
        return self::whereAlias($alias)
            ->whereIsPublished(1)
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->first();
    }
}
