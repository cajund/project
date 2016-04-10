app.factory('Image', function ($http) {

	return {

		// Get all images from server / DB
		// list: function () {
		// 	return $http.get('/ajax/image');
		// },

		// Get a single image from the server / DB
		get: function (id) {
			return $http.get('/ajax/image/'+id);
		},

		// Save a new image to the server / DB
		save: function (data) {
			return $http.post('/ajax/image', data, {
				transformRequest: angular.identity,
				headers: {'Content-Type': undefined}
			});
		},

		// Update a image on the server / DB
		// update: function (id, data) {
		// 	return $http.put('/ajax/image/'+id, data);
		// }

	}

});