@extends('layouts.app')

@section('content')


        <style>
            .content {
                font-weight: 100;
                margin: 0 auto;
                width: 600px;
                padding: 20px;
                float: left;
            }

            .list_wrapper {
                font-weight: 100;
                width: 350px;
                padding: 20px;
                margin-left: 40px;
                float: left;
            }

            .title {
                font-size: 36px;
            }
            .wrapper div {
                padding: 5px;
            }
            .link {
                font-weight: 400;
            }
            .link:hover {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
            .image {
                float: left;
            }
            .image img {
                height: 150px;
            }

            label {
                display: block;
                float: left;
                width: 150px;
                font-weight: 400;
            }
            input[type="text"], textarea {
                font-weight: 400;
                width: 400px;
            }
            textarea {
                font-weight: 400;
                height: 300px;
            }
            button  {
                font-weight: 400;
                float: right;
            }

        </style>
        <div ng-app="adminApp">
            
            <div class="container" ng-view>

            </div>
        
        </div>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.js') }}"></script>
        <script src="{{ URL::asset('js/admin/app.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/GalleryService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/ImageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/GalleryController.js') }}"></script>

@endsection
