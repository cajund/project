app.controller('GalleryController', function ($scope, $routeParams, Gallery, Image) {

	$scope.gallery_list = [];			// Variable for all Galleries
	$scope.current_gallery = null;		// Variable for the page shown in the form
	$scope.current_image_list = [];		// Variable for the current Image list

	// At startup, check to see if a specific page was requested
	function init() {
		if ($routeParams.id) {
			$scope.getPage($routeParams.id);
		};
		$scope.getAllGalleries();
	}

	// Go and get the list of all Galleries
	$scope.getAllGalleries = function () {
		Gallery.list().success(function (data) {
			$scope.gallery_list = data;
		});
	}

	// Gets a specific page from the database
	$scope.getGallery = function (id) {
		Gallery.get(id).success(function (data) {
			
			$scope.current_gallery = data;
			
			Image.get($scope.current_gallery.id).success(function (images) {
				$scope.current_image_list = images;
			})
		
		});
	}

	// Saves what is in the form
	$scope.saveGallery = function () {

		if ($scope.current_gallery.id) {

			Gallery.update($scope.current_gallery.id, $scope.current_gallery).success(function (data) {
				$scope.current_gallery = data;
				$scope.getAllGalleries();
			});

		} else {

			Gallery.save($scope.current_gallery).success(function (data) {
				$scope.current_gallery = data[0];
				$scope.getAllGalleries();
			});

		};
		
	}

	$scope.uploadImage = function () {
		
		var fd = new FormData();
		fd.append('file', $scope.myFile);
		fd.append('gallery_id', $scope.current_gallery.id);
		
		Image.save(fd).success(function (images) {
			$scope.current_image_list = images;
		})

	}

	// Resets the form
	$scope.clearGallery = function () {
		$scope.current_gallery = null;
		$scope.current_image_list = [];
	}

	// Call the startup script
	init();


})
.directive('fileModel', ['$parse', function ($parse) {
    return {
       restrict: 'A',
       link: function(scope, element, attrs) {
          var model = $parse(attrs.fileModel);
          var modelSetter = model.assign;
          
          element.bind('change', function(){
             scope.$apply(function(){
                modelSetter(scope, element[0].files[0]);
             });
          });
       }
    };
 }]);
