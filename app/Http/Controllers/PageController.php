<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use App\User;
use App\Submission;
use Log;

class PageController extends Controller
{

	public function index()
	{
		$page = Page::where('page_label', 'home')->first();
		return view('page', $page);
	}

    public function about()
    {    	
        $page = Page::where('page_label', 'about')->first();
        return view('page', $page);
    }

    public function contact()
    {    	
        $page = Page::where('page_label', 'contact')->first();
        return view('contact', $page);
    }

    public function save_contact_form(Request $request)
    {
        Log::debug($request->all());

        $data = $request->all();
        $success = Submission::create($data);
        
        // $success = User::create(
        //     ['email' => $data['email']]
        // );



        $page = Page::where('page_label', 'thanks')->first();
        return view('page', $page);
    }
}
