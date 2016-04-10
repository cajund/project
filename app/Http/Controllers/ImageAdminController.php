<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Log;

class ImageAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $toSave = array();
        
        if ($request->hasFile('file') && $request->file('file')->isValid()) {

            $toSave['gallery_id'] = $request->input('gallery_id');
            $toSave['filename'] = $request->file('file')->getClientOriginalName();
            $toSave['name'] = $request->file('file')->getClientOriginalName();

            $image = Image::create($toSave);

            $destinationPath = app_path() . '/../public/galleries';
            $fileName = $image['id'] . '-' . $toSave['filename'];

            $request->file('file')->move($destinationPath, $fileName);

            $image = Image::where('id', $image['id'])->update(['filename' => $fileName]);

        }

        return $this->show($request->input('gallery_id'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id) {
            $images = Image::where('gallery_id', $id)->get();
            return response()->json($images);

        } else {
            return response()->json(array());

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
