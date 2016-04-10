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
                <form action="/contact" method="post">
                    <table border="0" cellspacing="0" cellpadding="3">
                        <tr>
                            <td align="left"  class="" >
                                <b>Name</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left"  class="">
                                            <input type="text" name="name" size="30" maxlength="64" >
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  class="" >
                                <b>Email Address</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left"  class="">
                                            <input type="text" name="email" size="40" maxlength="128" >
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"  class="" valign="top">
                                <b>Question or Comment</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left"  class="">
                                            <textarea name="question" rows="4" cols="50"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td  class="" colspan="2" align="">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>

@endsection