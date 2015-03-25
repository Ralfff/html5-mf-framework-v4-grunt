# html5-mf-framework-v4-grunt

There are 3 main folders in this file: 
- dev: this is the dev environment, start here
- live: this is the output file, grunt deploy will combin, minify and copy all relevant files.  
- wp: grunt wp will deploy css, js and images to this folder which already contains a wordpress base theme. 

##1. dev 
###css Folder 

####css-dev 
All inside this folder will be imported into the style-imports.css file. Grunt watch will take this file and generate two more files – style.css and style.min.css.
it contains: 
- reset.css (reset, clearfix, border-box-layout, wp-core)
- modules.css (modules go here, general styles, like button-styles and such)
- base-styles.css: the absolute basic styling (html, body, h1, p, a ...)
- structure.css: the basic layout structure. Define your container, frames, grid... 
- header.css: header-stuff goes here 
- content.css: content stuff goes here 
- footer.css: content stuff goes here 
- helper.css: all the help you can get. small classes that will save you time. 

####preview-styles.css 
This file contains additional styles for preview.html. The preview.html file is kind of a styleguide. It displays your base formats and layout. It’s pretty handy. Anyways... this file needed some additional styling, which I set here. 


...tbc

