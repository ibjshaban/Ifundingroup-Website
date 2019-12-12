<?php

namespace App\Http\Controllers\Dashboard;

use App\applynow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applynowController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('frontend.apply-now', compact('user'));
    }

    public function store(Request $request)
    {
        applynow::create($request->all());

        return redirect()->back()->with('success', 'The request has been sent');
    }

    public function view()
    {
        $user = Auth::user();

        $requests = applynow::all();

        return view('dashboard.apply-now', compact('user', 'requests'));
    }

    public function destroy($id)
    {
        applynow::find($id)->delete();

        return back()->with('success', 'The request has been deleted');
    }
}