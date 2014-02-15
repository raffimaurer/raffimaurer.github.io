module.exports = function(grunt) {
	pkg: grunt.file.readJSON('package.json'),
	grunt.initConfig({

		// Compile Sass
	    sass: {
	      dist: {
	      	options: {
	      		style: 'compressed'
	      	},
	        files: {
	          'assets/css/style.min.css' : 'assets/css/main.scss'
	        }
	      }
	    },

	    // Jekyll build
	    //jekyll: {
	    //	server : {
		//        src : './',
		//        dest: '_site',
		//        server : true,
		//        //server_port : 4000,
		//        auto : true
      	//	},
	    //},

	    connect: {
	      server: {
	        options: {
	          hostname: null,
	          port: 4000,
	          base: '_site',
	        }
	      }
    	},

	    // Watch tasks
	    watch: {
	   		options: {
				livereload: true,
   			},


	      css: {
	        files: ['/assets/css/**/*'],
	        tasks: ['sass'],
	        options: {
	          interrupt: true,
	          spawn: false,
	        },
	      },

	      site: {
	        files: [
	          '**/*',
	          '!**/node_modules/**',
	          '!**/_site/**'
	        ],
	        tasks: ['sass'],
	        options: {
	          spawn: false,
	        },
	      },
	    },
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	//grunt.loadNpmTasks('grunt-jekyll');
	grunt.loadNpmTasks('grunt-notify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-connect');

	grunt.registerTask('default', ['sass', 'connect', 'watch']);
};