<?php

namespace App\Http\Controllers;

use App\Models\OnlineApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use Alert;
class OnlineApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicats = OnlineApplication::orderBy('id','Desc')->where('status',0)->get();
        return view('admin/online_applicants/records',compact('applicats'));
    }

    public function approved_students()
    {
        $approvals = OnlineApplication::orderBy('id','Desc')->where('status',1)->get();
        return view('admin/online_applicants/approved',compact('approvals'));
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
        
        if (OnlineApplication::where('id_index_no', '=', $request->id_index_no)->exists()) {
         
            Alert::error('Already An Applicant','The Student with ID/Index No.'.strtoupper($request->id_index_no).' '.' has Applied');
            return redirect()->back();
        }

        
        $onlineApplication = new OnlineApplication;
        $file = $request->result_slip;
        $result_slip = date('his').$file->getClientOriginalName();
        $destinationPath = 'uploads/result_slip/';
        $uploadSuccess = $file->move($destinationPath, $result_slip);

        $file = $request->birth_cert;
        $birth_cert = date('his').$file->getClientOriginalName();
        $destinationPath = 'uploads/birth_cert/';
        $uploadSuccess = $file->move($destinationPath, $birth_cert);

        $file = $request->bank_slip;
        $bank_slip =date('his').$file->getClientOriginalName();
        $destinationPath = 'uploads/bank_slip/';
        $uploadSuccess = $file->move($destinationPath, $bank_slip);


        // works good ...yes,just take their paths yes
        $onlineApplication->fname = $request->fname;
        $onlineApplication->lname = $request->lname;
        $onlineApplication->email = $request->email;
        $onlineApplication->phone_no = $request->phone_no;
        $onlineApplication->id_index_no = $request->id_index_no;
        $onlineApplication->gender = $request->gender;
        $onlineApplication->m_status = $request->m_status;
        $onlineApplication->county = $request->county;
        $onlineApplication->sub_county = $request->sub_county;
        $onlineApplication->location = $request->location;
        $onlineApplication->postal_address = $request->postal_address;
        $onlineApplication->parent_name = $request->parent_name;
        $onlineApplication->parent_contact = $request->parent_contact;
        $onlineApplication->selection1 = $request->selection1;
        $onlineApplication->selection2 = $request->selection2;
        $onlineApplication->selection3 = $request->selection3;
        $onlineApplication->result_slip = $result_slip; 
        $onlineApplication->birth_cert = $birth_cert; 
        $onlineApplication->bank_slip = $bank_slip; 
        $onlineApplication->prefered_intake = $request->prefered_intake;
        $onlineApplication->save();

        Alert::success('Online Application', 'Your Application Was Successfull');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnlineApplication  $onlineApplication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = OnlineApplication::firstOrFail();
        return view('admin/online_applicants/details',compact('applicant'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnlineApplication  $onlineApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineApplication $onlineApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnlineApplication  $onlineApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineApplication $onlineApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnlineApplication  $onlineApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineApplication $onlineApplication)
    {
        //
    }

    public function result_slip($fileName)
    {
        $file_path = public_path('/uploads/result_slip/'.$fileName);
        return response()->download($file_path);
    }

    public function birth_cert($fileName)
    {
        $file_path = public_path('/uploads/birth_cert/'.$fileName);
        return response()->download($file_path);
    }

    public function bank_slip($fileName)
    {
        $file_path = public_path('/uploads/bank_slip/'.$fileName);
        return response()->download($file_path);
    }

    public function approve($id){
        $student =  OnlineApplication::findorFail($id);

        $student->status = 1;
        $student->save();
        return redirect()->back();
    }
}
