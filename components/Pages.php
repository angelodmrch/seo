<?php namespace Dmrch\Seo\Components;

use Cms\Classes\ComponentBase;
use Dmrch\Seo\Models\Pages as ModelPage;
use Dmrch\Seo\Models\Settings as Settings;

class Pages extends ComponentBase
{

    public $seo; 
    public $head_scripts;
    public $body_scripts;

    public function componentDetails()
    {
        return [
            'name'        => 'Pages Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun() {
        $this->seo = $this->getMeta($this->page->id);
        $this->head_scripts = Settings::get('head');
        $this->body_scripts = Settings::get('scripts');
    }

    public function getMeta($page)
    {
        foreach (ModelPage::all() as $value) {
            
            if (in_array($page, $value->pages)) {

                return ModelPage::find($value->id);
                break;

            }
        } 
    }
}