require('./bootstrap');

require('./controller/mainCtrl');
require('./controller/formCtrl');
require('./services/homeService');

window.someApp = angular.module('someApp', ['ngRoute', 'homeService', 'mainController', 'formController']);

window.someApp.config(function($routeProvider, $locationProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'templates/home.html',
            controller: 'mainController'
        })
        .when('/create/', {
            templateUrl: 'templates/form.html',
            controller: 'formController'
        })
        .when('/edit/:id', {
            templateUrl: 'templates/form.html',
            controller: 'formController'
        });

    $locationProvider.html5Mode(false);
});
