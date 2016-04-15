app.controller('SubmissionController', function ($scope, $routeParams, Submission) {

	$scope.list = [];			// Variable for all pages

	// At startup, check to see if a specific page was requested
	function init() {
		$scope.getAllSubs();
	}

	// Go and get the list of all pages
	$scope.getAllSubs = function () {
		Submission.list().success(function (data) {
			$scope.list = data;
		});
	}

	// Call the startup script
	init();


});