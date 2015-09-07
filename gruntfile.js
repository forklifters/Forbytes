/*
This file in the main entry point for defining grunt tasks and using grunt plugins.
Click here to learn more. http://go.microsoft.com/fwlink/?LinkID=513275&clcid=0x409
*/
module.exports = function (grunt) {
    // Configure grunt
    grunt.initConfig({
        sprite: {
            common: {
                src: 'img/app/common/forsprite/*.png',
                retinaSrcFilter: 'img/app/common/forsprite/*-2x.png',
                retinaDest: 'css/commonsprite-2x.png',
                dest: 'css/commonsprite.png',
                destCss: 'css/commonsprite.css',
                padding: 2
            },
            clients: {
                src: 'img/app/clients/forsprite/*.png',
                retinaSrcFilter: 'img/app/clients/forsprite/*-2x.png',
                retinaDest: 'css/clientssprite-2x.png',
                dest: 'css/clientssprite.png',
                destCss: 'css/clientssprite.css',
                padding: 2
            },
            company: {
                src: 'img/app/company/forsprite/*.png',
                retinaSrcFilter: 'img/app/company/forsprite/*-2x.png',
                retinaDest: 'css/companysprite-2x.png',
                dest: 'css/companysprite.png',
                destCss: 'css/companysprite.css',
                padding: 2
            }
        }
    });

    // Load in `grunt-spritesmith`
    grunt.loadNpmTasks('grunt-spritesmith');
};