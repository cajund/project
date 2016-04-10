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
            .image{
                float: left;
                padding: 5px;
            }
            .image img {
                height: 150px;
            }
            .g_list {
                font-weight: 400;
                font-size: 20px;
            }

        </style>


        <div class="container">
            <div class="content">
                <div class="g_list">
                    All Galleries:<br>
                    @foreach( $all_galleries as $g)
                        <a href="/gallery/{{$g->id}}">{{ $g->name }}</a> &nbsp;&nbsp;&nbsp;
                    @endforeach
                </div>
                <div class="title">
                    {{$gallery->name}}
                </div>
                <div class="body">
                    @foreach( $gallery->images as $image)
                    <div class="image">
                        <img src="/galleries/{{ $image->filename }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

@endsection