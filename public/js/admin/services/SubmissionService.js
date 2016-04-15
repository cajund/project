app.factory('Submission', function ($http) {

	return {

		// Get all images from server / DB
		list: function () {
			return $http.get('/ajax/submission');
		},

		// Get a single image from the server / DB
		get: function (id) {
			return $http.get('/ajax/submission/'+id);
		},


	}

});