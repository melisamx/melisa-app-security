module.exports = function(grunt) {
    
    grunt.initConfig({
        main: {
            appName: 'Security',
            sencha: 'resources/views/sencha/',
            src: 'resources/assets/',
            output: '../../public/<%= main.appName.toLowerCase() %>/',
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
                    '<%= main.output %>css/passwordless-phone.css': '<%= main.src %>less/passwordless-phone.less'
                }
            }
        },
        watch: {
            files: ['<%= main.src %>less/**/*.less'],
            tasks: ['less'],
            sencha: {
                files: [
                    '<%= main.sencha %>**/*.*',
                    '<%= main.src %>less/**/*.less'
                ],
                options: {
                    livereload: {
                        host: 'developer.melisa.mx',
                        key: grunt.file.read('/home/installer/assets/privkey.pem'),
                        cert: grunt.file.read('/home/installer/assets/fullchain.pem'),
                        port: 9000
                    }
                }
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', [
        'watch',
        'watch:sencha'
    ]);
    
};
