var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/pages/:id?', {
			controller: 'PageController',
			templateUrl: '/js/admin/partials/pageTmpl.html'
		})
		.when('/galleries/:id?', {
			controller: 'GalleryController',
			templateUrl: '/js/admin/partials/galleryTmpl.html'
		})
		.otherwise({ redirectTo: '/pages' });

}]);

