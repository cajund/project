@extends('layouts.app')

@section('content')
        
        <style>
            .container {
                text-align: center;
                /*vertical-align: middle;*/
            }

            .content {
                font-weight: 100;
                font-family: 'Lato';
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            
            .body {
                font-size: 24px;
                font-weight: bold;
                padding: 20px;
            }
        </style>


        <div class="container">
            <div class="content">
                <div class="title">
                    {{$headline}}
                </div>
                <div class="body">
                    {!!$body!!}
                </div>
            </div>
        </div>

@endsection