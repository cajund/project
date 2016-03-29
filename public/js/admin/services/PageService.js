app.factory('Page', function ($http) {

	return {

		// Get all pages from server / DB
		list: function () {
			return $http.get('/ajax/page');
		},

		// Get a single page from the server / DB
		get: function (id) {
			return $http.get('/ajax/page/'+id);
		},

		// Save a new page to the server / DB
		save: function (data) {
			return $http.post('/ajax/page', data);
		},

		// Update a page on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/page/'+id, data);
		}

	}

});