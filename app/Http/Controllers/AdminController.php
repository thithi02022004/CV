<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Infomation;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Email;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view("backend.page.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function infomation()
    {
        $infomation = Infomation::all();
        $arr = [
            'status' => true,
            'message' => "Thông tin cá nhân",
            'data'=>Infomation::all()
            ];
            return response()->json($arr, 200);
            
        // return view("backend.page.infomation", compact('json'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show_infomation()
    {   
        $response = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/infomation');
        $data = $response->json();
        // dd($data);
        return view('backend.page.infomation', ['data' => $data["data"][0]]);
    }

    /**
     * Display the specified resource.
     */
    public function edit_infomation(Request $request)
    {
        // dd($request->FullName);
        $fileName = $request->Image->getClientOriginalName();
        $request->Image->move('profile',$fileName);
        $id = $request['MyID'];
        $infomation = Infomation::find($id);
        $infomation->update(
            [
                'FullName'=>$request->FullName,
                'Target'=>$request->Target,
                'Image'=>$fileName,
                'DateOfBirth'=>$request->DateOfBirth,
                'PlaceOfBirth'=>$request->PlaceOfBirth,
                'Nation'=>$request->Nation,
                'Gender'=>$request->Gender,
                'Nationality'=>$request->Nationality,
                'ContactEmail'=>$request->ContactEmail,
                'ContactPhone'=>$request->ContactPhone,
                'Hobbies'=>$request->Hobbies,
                'Status'=>$request->Status,
            ]
        );
        return redirect()->route('show_infomation')->with('success', 'Cập Nhật thành công');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function experience()
    {
        $experience = Experience::all();
        $arr = [
            'status' => true,
            'message' => "Thông tin kỹ năng",
            'exp'=>Experience::all()
            ];
            return response()->json($arr, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function list_experience()
    {   
        $response = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/experience');
        $exp = $response->json();
        return view('backend.page.list_experience', ['exp' => $exp["exp"]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function edit_experience(Request $request, $project)
    {
        $id = $project;
        $experience = Experience::find($id);
        $arr = [
            'status' => true,
            'message' => "Thông tin kỹ năng",
            'exp'=>Experience::find($id)
            ];
            return response()->json($arr, 200);
    }
    public function show_edit_experience(Request $request, $project)
    {
        $id = $project;
        $response = Http::get("http://localhost/php/VC_online_laravel/laravel/public/api/admin/edit_experience/$id");
        $exp = $response->json();
        return view('backend.page.experience', ['exp' => $exp["exp"]]);
    }
    public function update_experience(Request $request, $project)
    {
        $fileName = $request->Image->getClientOriginalName();
        $request->Image->move('profile',$fileName);
        $id = $project;
        $experience = Experience::find($id);
        $experience->update(
            [
                'ProjectName'=>$request->ProjectName,
                'Team'=>$request->Team,
                'Position'=>$request->Position,
                'Company'=>$request->Company,
                'StartDay'=>$request->StartDay,
                'EndDate'=>$request->EndDate,
                'Responsibilities'=>$request->Responsibilities,
                'Contribute'=>$request->Contribute,
                'Tools'=>$request->Tools,
                'LinkCode'=>$request->LinkCode,
                'LinkWeb'=>$request->LinkWeb,
                'Datas'=>$request->Datas,
                'SkillsFrontend'=>$request->SkillsFrontend,
                'SkillsBackend'=>$request->SkillsBackend,
                'Image'=>$fileName,
                'Status'=>$request->Status,
            ]
        );
        return redirect()->route('list_experience')->with('success', 'Cập Nhật thành công');
    }
    
    public function education(){
        $education = Education::all();
        $arr = [
            'status' => true,
            'message' => "Thông tin học vấn",
            'edu'=>Education::all()
            ];
            return response()->json($arr, 200);
    }
    public function list_education(){
        $response = Http::get('http://localhost/php/VC_online_laravel/laravel/public/api/admin/education');
        $edu = $response->json();
        return view('backend.page.list_education', ['edu' => $edu["edu"]]);
    }
    public function edit_education(Request $request, $education){
        $id = $education;
        $education = Education::find($id);
        $arr = [
            'status' => true,
            'message' => "Thông tin học vấn",
            'edu'=>Education::find($id)
            ];
            return response()->json($arr, 200);
    }
    public function show_edit_education(Request $request, $education){
        $id = $education;
        $response = Http::get("http://localhost/php/VC_online_laravel/laravel/public/api/admin/edit_education/$id");
        $edu = $response->json();
        return view('backend.page.education', ['edu' => $edu["edu"]]);
    }
    public function update_education(Request $request, $education)
    {
        $fileNameDegree = $request->ImageDegree->getClientOriginalName();
        $request->ImageDegree->move('profile',$fileNameDegree);
        $fileNameQualifi = $request->ImageQualifications->getClientOriginalName();
        $request->ImageQualifications->move('profile',$fileNameQualifi);
        $id = $education;
        $education = Education::find($id);
        $education->update(
            [
                'Education'=>$request->Education,
                'Qualifications'=>$request->Qualifications,
                'ImageDegree'=>$fileNameDegree,
                'ImageQualifications'=>$fileNameQualifi,
                'YearOfGraduation'=>$request->YearOfGraduation,
                'Point'=>$request->Point,
            ]
        );
        return redirect()->route('list_education')->with('success', 'Cập Nhật thành công');
    }
}
