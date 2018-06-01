module.exports = function (grunt) {

    // ===========================================================================
    // CONFIGURE GRUNT ===========================================================
    // ===========================================================================

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),


        // all of our configuration will go here

        watch: {
            scripts: {
                files: ['js/scripts.js', 'js/bookmarklet.js'],
                tasks: 'uglify'
            },
            css: {
                files: 'css/sass/*.scss',
                tasks: ['sass', 'cssmin']
            }
        },
        sass: {
            build: {
                files: [{
                    src: ['css/sass/main.scss'],
                    dest: 'css/main.css'
                }]
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            target: {
                files: {
                    'js/scripts.min.js' : 'js/scripts.js',
                    'js/bookmarklet.min.js' : 'js/bookmarklet.js'
                }
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'css/',
                    ext: '.min.css'
                }]
            }
        }
    });


    //Load plugins
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');


    //Default Task(s)
    grunt.registerTask('default', ['sass', 'cssmin', 'uglify', 'watch']);

};