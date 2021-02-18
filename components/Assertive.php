<?php namespace Dmrch\Seo\Components;

use Cms\Classes\ComponentBase;
use Dmrch\Seo\Models\Assertive as ModAssertive;

class Assertive extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Assertive Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll($slug)
    {
        return ModAssertive::where('slug', $slug)->first();
    }
}
