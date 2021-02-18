<?php namespace Dmrch\Seo\Models;

use Model;

/**
 * Assertive Model
 */
class Assertive extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dmrch_seo_assertives';

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
}
