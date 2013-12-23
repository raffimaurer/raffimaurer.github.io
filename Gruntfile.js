module.exports = function(grunt) {
	pkg: grunt.file.readJSON('package.json'),
	grunt.initConfig({

		// Compile Sass
	    sass: {
	      dist: {
	        files: {
	          'assets/css/style.css' : 'assets/css/main.scss'
	        }
	      }
	    },

	    // Minify CSS
	    csso: {
	      dist: {
	        options: {
	          report: 'gzip'
	        },
	        files: {
	          'assets/css/style.min.css': ['assets/css/style.css']
	        }
	      }
	    },

	    // Jekyll build
	    jekyll: {
	    	server : {
		        src : './',
		        dest: '_site',
		        server : true,
		        server_port : 4000,
		        auto : true
      		},
	    },

	    connect: {
	      server: {
	        options: {
	          hostname: null,
	          port: 4000,
	          base: '_site'
	        }
	      }
    	},

	    // Watch tasks
	    watch: {
	      options: {
			livereload:true,
	      },

	      css: {
	        files: ['/assets/css/**/*'],
	        tasks: ['sass', 'csso'],
	        options: {
	          interrupt: true,
	          spawn: false,
	          debounceDelay: 0,
	        },
	      },

	      site: {
	        files: [
	          '**/*',
	          '!**/node_modules/**',
	          '!**/_site/**'
	        ],
	        tasks: ['sass', 'csso', 'jekyll'],
	        options: {
	          spawn: false,
	        },
	      },
	    },
	});

	// Load npm tasks
	grunt.loadNpmTasks('grunt-csso');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-jekyll');
	grunt.loadNpmTasks('grunt-notify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-connect');

	grunt.registerTask('default', ['sass', 'csso', 'jekyll', 'connect', 'watch']);
};