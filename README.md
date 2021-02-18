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