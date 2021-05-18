<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudyRequest;

class BibleStudyController extends Controller
{
    public function form(Request $request) {
    	$title = 'Bible Study Request Form';
        $requests = new BibleStudyRequest();
    	return view('form', compact('title', 'requests'));
    }

    public function create(Request $request) {
    	$requests = new BibleStudyRequest();

    	$requests->cname = $request->cname;
    	$requests->email = $request->email;
    	$requests->contact = $request->contact;
    	$requests->bdate = $request->bdate;
    	$requests->religion = $request->religion;
    	$requests->bsdate = $request->bsdate;
    	$requests->bstime = $request->bstime;
    	$requests->location = $request->location;

    	if ($requests->save()) {
    		return redirect('thank-you');
    	}
        return redirect('thank-you');
    }

    public function requests(Request $request) {
    	$title = 'List of Scheduled Bible Study Requests';
        $requests = BibleStudyRequest::all();
    	return view('requests', compact('title', 'requests'));
    }

    public function thanks(Request $request) {
    	$title = 'Thanks be unto God';
    	return view('thanks', compact('title'));
    }
}
