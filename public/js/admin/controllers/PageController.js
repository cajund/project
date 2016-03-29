app.controller('PageController', function ($scope, $routeParams, Page) {

	$scope.page_list = [];			// Variable for all pages
	$scope.current_page = null;		// Variable for the page shown in the form

	// At startup, check to see if a specific page was requested
	function init() {
		if ($routeParams.id) {
			$scope.getPage($routeParams.id);
		};
		$scope.getAllPages();
	}

	// Go and get the list of all pages
	$scope.getAllPages = function () {
		Page.list().success(function (data) {
			$scope.page_list = data;
		});
	}

	// Gets a specific page from the database
	$scope.getPage = function (page_id) {
		Page.get(page_id).success(function (data) {
			$scope.current_page = data;
		});
	}

	// Saves what is in the form
	$scope.savePage = function () {
		
		if ($scope.current_page.id) {
			Page.update($scope.current_page.id, $scope.current_page).success(function (data) {
				$scope.current_page = data;
				$scope.getAllPages();
			});
		} else {
			Page.save($scope.current_page).success(function (data) {
				$scope.current_page = data[0];
				$scope.getAllPages();
			});
		};
		
	}

	// Resets the form
	$scope.clearPage = function () {
		$scope.current_page = null;
	}

	// Call the startup script
	init();


});