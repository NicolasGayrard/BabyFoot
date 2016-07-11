module.exports = function(grunt) {
    'use strict';

    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-wiredep');
    grunt.loadNpmTasks('grunt-bower-concat');

    // Configurable paths for the application
    var appConfig = {
        src: 'src/Admin'
    };

    // Define the configuration for all the tasks
    grunt.initConfig({


        // Project settings
        sf2GibBabyFootApp: appConfig,
        wiredep: {
            target: {
                src: 'app/Resources/views/base.html.twig',
                ignorePath: '../../../web'
            }
        },

        less: {
            app: {
                options: {
                    cleancss: true,
                    compress: true
                },
                files: {
                    '<%= sf2GibBabyFootApp.src %>/Resources/public/css/style.css': '<%= sf2GibBabyFootApp.src %>/Resources/less/style.less',
                }
            }
        },

        // Make sure code styles are up to par and there are no obvious mistakes
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: {
                src: [
                    'Gruntfile.js',
                    '<%= sf2GibBabyFootApp.src %>/Resources/public/js/{,*/}*.js'
                ]
            }
        },

        // Watches files for changes and runs tasks based on the changed files
        watch: {
            less: {
                files: [
                    '<%= sf2GibBabyFootApp.src %>/Resources/less/{,*/}*.less'
                ],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            bower: {
                files: ['bower.json'],
                tasks: ['wiredep'],
                options: {
                    livereload: true
                }
            },
            js: {
                files: [
                    '<%= sf2GibBabyFootApp.src %>/Resources/public/js/{,*/}*.js'
                ],
                tasks: ['jshint'],
                options: {
                    livereload: true
                }
            },
            views: {
                files: [
                    '<%= sf2GibBabyFootApp.src %>/Resources/views/{,*/}*.twig',
                    'app/Resources/views/base.html.twig',
                    'app/Resources/FOSUserBundle/views/{,*/}*.twig'
                ],
                tasks: ['jshint'],
                options: {
                    livereload: true
                }
            }
        }
    });


    grunt.registerTask('serve', 'Watch task started...', [
        'wiredep',
        'watch'
    ]);

    grunt.registerTask('build', [
        'wiredep',
        'less',
    ]);

    grunt.registerTask('default', [
        'build'
    ]);

    // Used for delaying livereload until after server has restarted
    grunt.registerTask('wait', function() {
        grunt.log.ok('Waiting for server reload...');

        var done = this.async();

        setTimeout(function() {
            grunt.log.writeln('Done waiting!');
            done();
        }, 1500);
    });
};
