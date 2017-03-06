

# dutchdodostartertheme
A modern startertheme build with Gulp and Bower.
This setup is tested on Node 5.0 and 3.3.6

## Plugins
1. WP-Pusher or https://github.com/afragen/github-updater are used to update the plugin from github.
2. Meta_box is used for extra information on postypes
3. NinjaForms is used for contactform.
4. Google Analytics by MonsterInsights
5. Jetpack for CDN


## Setup
1. Check if gulp is installed with gulp --v
2. If installed run npm install or sudo npm install in the theme folder
3. Run bower install

## Developing
To start developing you can run gulp or if you want realtime sync with all of your browsers run grunt dev-sync
When pushing code to the live environment run grunt release first it will auto-prefix your css as well concat and uglify your JS files

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
