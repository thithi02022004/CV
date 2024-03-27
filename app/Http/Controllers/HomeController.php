<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/infomation');
        $data = $response->json();
        $experience = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/experience');
        $data_exp = $experience->json();
        $education = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/education');
        $edu = $education->json();
        $exp1 = Http::get("http://localhost/php/VC_online_laravel/laravel/public/api/admin/edit_experience/1");
        $exp1 = $exp1->json();
        
        return view('frontend.page.home', [
            'viewData' => [
                'info' => $data["data"][0],
                'exp' => $data_exp["exp"],
                'edu' => $edu["edu"][0],
                'exp1' => $exp1["exp"]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
