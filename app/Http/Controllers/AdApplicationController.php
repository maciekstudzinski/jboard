<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class AdApplicationController extends Controller
{

    use AuthorizesRequests;
    /**
     * Show the form for creating a new resource.
     */
    public function create(Ad $ad)
    {
        $this->authorize('apply', $ad);
        return view('ad_application.create', ['ad' => $ad]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Ad $ad, Request $request)
    {
        $this->authorize('apply', $ad);
        $ad->adApplications()->create([
            'user_id' => $request->user()->id,
            ...$request->validate([
                'expected_salary' => 'required|min:1|max:1000000'
            ]),
        ]);

        return redirect()->route('ads.show', $ad)->with('success', 'Application submitted');
;    }

 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
