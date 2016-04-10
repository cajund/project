app.factory('Gallery', function ($http) {

	return {

		// Get all galleries from server / DB
		list: function () {
			return $http.get('/ajax/gallery');
		},

		// Get a single gallery from the server / DB
		get: function (id) {
			return $http.get('/ajax/gallery/'+id);
		},

		// Save a new gallery to the server / DB
		save: function (data) {
			return $http.post('/ajax/gallery', data);
		},

		// Update a gallery on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/gallery/'+id, data);
		}

	}

});