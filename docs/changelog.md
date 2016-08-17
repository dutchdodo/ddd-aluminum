Changelog
=========

1.0.4
=====
NOTE: The build process is Node v5.0 compatibel
- Updated all npm packages to the most recent versions [Ferdie]
- Integrated postcss packages instead which provide better performance [Ferdie]
- Replaced autoprefixer with post-autoprefixer [Ferdie]
- Removal of Paradeiser menu the new default menu will be http://tympanus.net/Development/MultiLevelPushMenu/index3.html by [Ferdie]
- No need for a style.min.css the style.css is always minified and prefixed ( in the release task ), so style.min.css is deleted [Ferdie]
- Added Gulp workflow instead of Grunt [ Jason ]

1.0.3
=====
- Added editor-style.css for editor styling in the admin
- Added ys_metabox_maybe_include function to load metaboxes on specific pages
- Removal of finalize() in main.js
- Renamed all yard_startertheme with ys
- Naming conventions added for functions with filters and actions i.e. ys_filter_function_name or ys_action_function_name
- Added function to load scripts defer and async
- Moved the browsersync script to utils.php called with hook by Edwin
- Renamed yardstarterTheme JS variable to YS by Marcel
- Moved John Billons CPT and TAXOS to plugin by Edwin
- Added P2P implementation in inc/p2p.php by Ferdie

1.0.2
=====
- Cleanup and refactoring of the functions files
- Bower dependency for maintaining front-end packages
- Gruntfile.js revised and better workflow changes
- Browser sync added for better testing on different browsers and devices
- Better 'wel written' functions for registering CPT and Taxonomies, even admin area support!
- Restructured all project assets like css,js,img into one assets dir
- Header cleanup
- 404 page refactored
- Added custom.php for project specific functions
- Added utils.php where all generic functions for every project should be, these functions can be overriden in the custom.php
- All templates and templates parts are organized by a parent directory
- Added default template-home.php
- Added default mobile menu
- Speeded up the grunt with grunt-jit
- Added helpers scss file for adding helper classes
- Renamed the function prefix yard_startertheme to ys
- Admin.css for specific admin styling
- New screenshot.png added
- Added breakpoint mixins and REM fallback for older browsers


1.0.1
=====
- Altered usage of joyo_ en Joyo_ to yard_ and Yard_ in utility.php 
- Added widget filters
- Added sidebar definitions
- Added enkelvoudige P2P definitions
- Renamed Yard_startertheme to yard_startertheme, yard-startertheme to yard-startertheme


1.0.0
=====
Initial version