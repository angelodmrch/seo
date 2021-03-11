# SEO Plugin

The example shows the basic component usage:

	description = "Default layout"

    [seo]

	==

	<html>
    	<head>
        	<meta charset="UTF-8">        

       		{% component 'seo' %}
        	
        	{% component 'seo::head_scripts' %}

        	...

		</head>

    	<body>

	        {% component 'seo::body_scripts' %}

	        ...


##RainLab.Blog Integration

Post Page usage:

    ==
    function onEnd(){
        $this->page->title = $this->blogPost->post->seo_title;
        $this->seo->seo['seo_title'] = $this->blogPost->post->seo_title;
        $this->seo->seo['seo_description'] = $this->blogPost->post->seo_description;
        $this->seo->seo['seo_keywords'] = $this->blogPost->post->seo_keywords;
    }
    ==

Category Page usage:

    ==
    function onEnd(){
        $this->page->title = $this->category->seo_title;
        $this->seo->seo['seo_title'] = $this->category->seo_title;
        $this->seo->seo['seo_description'] = $this->category->seo_description;
        $this->seo->seo['seo_keywords'] = $this->category->seo_keywords; 
    }
    ==