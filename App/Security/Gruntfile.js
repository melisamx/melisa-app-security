module.exports = function(grunt) {
    
    grunt.initConfig({
        pkg: {
            appName: 'Security',
            sencha: 'resources/views/sencha/',
            src: 'resources/assets/',
            output: '../../public/<%= pkg.appName.toLowerCase() %>/',
            proyect: {
                name: 'Melisa Security',
                version: '1.0.0',
                company: 'Melisa Company'
            }
        },
        less: {
            options: {
                compress: true
            },
            all: {
                files: {
                    '<%= pkg.output %>css/passwordless-phone.css': '<%= pkg.src %>less/passwordless-phone.less',
                    '<%= pkg.output %>css/my-profile-settings.css': '<%= pkg.src %>less/my-profile-settings.less'
                }
            }
        },
        watch: {
            files: ['<%= pkg.src %>less/**/*.less'],
            tasks: ['less']
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', [
        'watch'
    ]);
    
};
