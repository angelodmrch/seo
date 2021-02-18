<?php namespace Dmrch\Seo\Models;

use Model;

use Cms\Classes\Page;
use Cms\Classes\Theme;

/**
 * Pages Model
 */
class Pages extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dmrch_seo_pages';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public $jsonable = ['pages'];


    public function getPagesOptions() {
        if (!$theme = Theme::getEditTheme()) {
            throw new ApplicationException('Unable to find the active theme.');
        }

        return Page::listInTheme($theme)->lists('title', 'id');
    }
}
