module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    uglify: {
      options: {
        preserveComments: 'some',
      },
      build: {
        src: 'dev/js/custom.js', // input 
        dest: 'dev/js/custom.min.js' // output
      },
      all: {
        src: ['dev/js/modernizr.custom.js','dev/js/jquery.js','dev/js/plugins/*.js','dev/js/custom.js'], // input
        dest: 'dev/js/scripts.min.js' // output
      },
      deploy: {
        src: ['dev/js/modernizr.custom.js','dev/js/jquery.js','dev/js/plugins/*.js'], // input
        dest: 'dev/js/scripts.min.js' // output
      },
      wp: {
        src: ['dev/js/plugins/*.js'], // input
        dest: 'wp/js/plugins.min.js' // output
      }
    },//END OF UGLIFY


    cssmin: {
      target: {
        files: {
          'dev/style.min.css': ['dev/style.css']
        }
      }
    },//END OF CSSMIN


    cssjoin: {
      join :{
        files: {
          'dev/style.css': ['dev/style-imports.css'],
        },
      }
    }, //END OF CSSJOIN


    watch: {
      scripts: {
        files: ['dev/js/modernizr.custom.js','dev/js/jquery.js','dev/js/plugins/*.js'],
        tasks: ['uglify:deploy'],
        options: {
          spawn: false,
        }
      },
      
      css: {
        files: ['dev/style.css','dev/css/css-dev/*'],
        tasks: ['cssmin'],
        options: {
          livereload: true,
        },
      },

      join: {
        files: ['dev/css/css-dev/*'],
        tasks: ['cssjoin'],
        options: {
          livereload: true,
        },
      },

    }, //END OF WATCH


    copy: {
      deploy: {
        files: [
          {
            expand: true,
            cwd: 'dev/',
            src: [
              '*.html',
              'style.css',
              'style.min.css',
              'preview-styles.css',
              'js/modernizr.custom.js',
              'js/scripts.min.js',
              'js/custom.js',
              'images/**',
              'fonts/**'
            ],
            dest: 'live/',
          },
        ],
      },
      wp: {
        files: [
          {
            expand: true,
            cwd: 'dev/',
            src: [
              'style.css',
              'js/modernizr.custom.js',
              'js/jquery.js',
              'js/scripts.min.js',
              'js/custom.js',
              'images/**',
              'fonts/**'
            ],
            dest: 'wp/',
          },
        ],
      },
    },//END OF COPY


  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-cssjoin');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  // Default task(s).
  grunt.registerTask('default', ['uglify:all', 'cssjoin', 'cssmin','watch']);
  grunt.registerTask('join', ['watch:join']);
  grunt.registerTask('deploy', ['uglify:deploy', 'cssjoin', 'cssmin', 'copy:deploy']);
  grunt.registerTask('wp', ['uglify:wp', 'cssjoin', 'copy:wp']);
};