# dutchdodostartertheme
A modern startertheme build with Grunt and Bower.
This setup is tested on Node 5.0 and 3.3.6

## Setup
1. Check if grunt is installed with grunt --version
2. If installed run npm install or sudo npm install in the theme folder
3. Run bower install

## Developing
To start developing you can run grunt-dev or if you want realtime sync with all of your browsers run grunt dev-sync
When pushing code to the live enviorment run grunt release first it will autoprefix your css aswell concat and uglify your JS files

### Adding packages with bower 
To install additional front-end packages use bower install. Full list of bower packages see the website http://www.bower.io . 

##### How to add a library to the project via Bower?
At the moment the theme doesn't include automatically.

1. Run bower install <package>
2. Add the new files to grunt file
3. Run grunt setup so the files will be copied to the specified directory
4. Use enqueue_script or enqueue_style to include the new file or perhaps add it to style.scss. The js/src folder is another option, it will concat all the files within the src directory to smush it in combined.js

NOTE: The packages must be included manually! At the moment there is no automatic process.
 
## Image optimizing
Place al your original source images in the assets/img/src folder. The watch grunt task will notice the newly added images and run the image compression tool.
The new images are placed in assets/img path which you include in your templates

## Performance optimizing
- TODO

