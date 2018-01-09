module.exports = function(grunt) {
    var scssConfigs = ['web/css/config/vars.scss', 'web/css/config/functions.scss'];

    grunt.initConfig({
        // Installation des composants via bower
        exec: {
            bower: {
                command: 'bower --allow-root cache clean && bower --allow-root install'
            },
            sfass: {
                command: 'php app/console assets:install web'
            },
            phpunit: {
                command: 'phpunit -c app/'
            }
        },
        // Chargement des fichiers css et js dans le fichier layout.html.twig
        "bower-install": {
            target: {
                html: 'app/Resources/views/Layout/layout.html.twig',
                ignorePath: 'web/',
                cssPattern: '<link rel="stylesheet" href="{{ asset(\'{{filePath}}\') }}" />',
                jsPattern: '<script src="{{ asset(\'{{filePath}}\') }}"></script>'
            }
        },
        // On concat tous les fichiers sass enssembles
        concat: {
            sass: {
                src: scssConfigs.concat(grunt.file.expand("src/**/Resources/public/css/*.scss")),
                dest: 'web/css/all.scss'
            }
        },
        // Compile tous les fichiers scss situés dans les bundles
        sass: {
            build: {
                src: "web/css/all.scss",
                dest: "web/css/all.css",
                options: {
                    style: 'compressed',
                    compass: true
                }
            }
        },
        // Minifie tous les fichiers js situés dans les bundles
        uglify: {
            build: {
                src: 'src/**/Resources/public/js/*.js',
                dest: 'web/js/all.js'
            }
        },
        // Rafraichie la socket livereload lors de la modification d'un fichier
        watch: {
            assets: {
                files: ['src/**/Resources/public/*', 'web/css/config/*'],
                tasks: ['uglify', 'concat', 'sass', 'exec:sfass'],
                options: {
                    livereload: true
                }
            },
            phpunit: {
                files: ['src/**/Resources/public/*'],
                tasks: ['exec:phpunit']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-bower-install');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-exec');

    //CLI : grunt
    grunt.registerTask('default', ['watch:assets']);
    //CLI : grunt install
    grunt.registerTask('install', ['uglify', 'concat', 'sass', 'exec:bower', 'bower-install', 'exec:sfass']);
    //CLI : grunt phpunit
    grunt.registerTask('phpunit', ['watch:phpunit']);
};/**
 * Created by mac on 18/12/17.
 */
