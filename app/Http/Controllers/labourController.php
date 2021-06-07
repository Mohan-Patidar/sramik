<?php

namespace App\Http\Controllers;

use App\Models\labour;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\VarDumper\VarDumper;
use PDF;
use stdClass;

class labourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labours =labour::get();
        return view('admin.labour.index',compact("labours"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.labour.create');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'labour_id'=>'required',
            'date' => 'required|date',
            'leader_name' => 'required',
            'labour_name' => 'required',

        ]);
        if ($request->hasFile('image')) {

            $profile = $request->file('image');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('../image/image');
            $profile->move($path, $file_name);
        }
        else{
            $file_name = '';
        }
        $data = $request->all();
       

        if($request->get('work') != null){

        if (count($request->get('work')) > 0) {
       
            $work = $request->get('work');

        } else {
          
            $work = null;
        }
    }else{
        $work = null;
    }
        if (count($request->get('class')) > 0) {
            $edu = array();
            
           
          
            for($i=0; $i<count($request->get('class')); $i++){
                $object = new stdClass();
                $object->class = $request->get('class')[$i];
                $object->year = $request->get('year')[$i];
                $object->marks = $request->get('marks')[$i];
                $object->max = $request->get('max')[$i];
                $object->percentage = $request->get('percentage')[$i];

                    array_push($edu, $object);
            }
            $class = $edu;
        } else {
            $class = null;
        }
     
     


        $app = labour::create([
            'labour_id' => $data['labour_id'],
            'date' => $data['date'],
            'labour_name' => $data['labour_name'],
            'leader_name' => $data['leader_name'],
            'leader_contact' => $data['leader_contact'],
            'dob' => $data['dob'],
            'mobile_no' => $data['mobile_no'],
            'aadhar_no' => $data['aadhar_no'],
            'f_name' => $data['f_name'],
            'age' => $data['age'],
            'samagr' => $data['samagr'],
            'village' => $data['village'],
            'posto' => $data['posto'],
            'tehsil' => $data['tehsil'],
            'district' => $data['district'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'gender' => $data['gender'],
            'experience' => $data['experience'],
            'bank_name' => $data['bank_name'],
            'ifsc' => $data['ifsc'],
            'acc_no' => $data['acc_no'],
            'branch' => $data['branch'],
            'bank_add' => $data['bank_add'],
            'pan' => $data['pan'],
            'acc_holder' => $data['acc_holder'],
            'image' => $file_name,
            'work' => $work,
            'class' => $class,
            'ex_work'=>$data['ex_work'],
        ]);
    if($app){
         
        //mesage to labour code
    }
        Session::flash('message', 'labour added successfuly!');
        return redirect()->route('labour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $labour = labour::where("id", "=", $id)->first();

        return view('admin.labour.edit',compact("labour"));     
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
        // $labour =Labour::where("id", "=", $id)->first();
        $request->validate([
            'labour_id'=>'required',
            'date' => 'required|date',
            'leader_name' => 'required',
            'labour_name' => 'required',

        ]);
        if ($request->hasFile('image')) {

            $profile = $request->file('image');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('../image/image');
            $profile->move($path, $file_name);
        }else{
            $file_name = '';
        }
        $data = $request->all();
    

        if($request->get('work') != null){
        if (count($request->get('work')) > 0) {
            $work = $request->get('work');
        } else {
            $work = null;
        }
    }else{
        $work = null;
    }
        if (count($request->get('class')) > 0) {
            $edu = array();
            
           
          
            for($i=0; $i<count($request->get('class')); $i++){
                $object = new stdClass();
                $object->class = $request->get('class')[$i];
                $object->year = $request->get('year')[$i];
                $object->marks = $request->get('marks')[$i];
                $object->max = $request->get('max')[$i];
                $object->percentage = $request->get('percentage')[$i];

                    array_push($edu, $object);
            }
            $class = $edu;
        } else {
            $class = null;
        }
     
        $app = labour::where('id', $id)
            ->update([
                'labour_id' => $data['labour_id'],
            'date' => $data['date'],
            'labour_name' => $data['labour_name'],
            'leader_name' => $data['leader_name'],
            'leader_contact' => $data['leader_contact'],
            'dob' => $data['dob'],
            'mobile_no' => $data['mobile_no'],
            'aadhar_no' => $data['aadhar_no'],
            'f_name' => $data['f_name'],
            'age' => $data['age'],
            'samagr' => $data['samagr'],
            'village' => $data['village'],
            'posto' => $data['posto'],
            'tehsil' => $data['tehsil'],
            'district' => $data['district'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'gender' => $data['gender'],
            'experience' => $data['experience'],
            'bank_name' => $data['bank_name'],
            'ifsc' => $data['ifsc'],
            'acc_no' => $data['acc_no'],
            'branch' => $data['branch'],
            'bank_add' => $data['bank_add'],
            'pan' => $data['pan'],
            'acc_holder' => $data['acc_holder'],
            'image' => $file_name,
            'work' => $work,
            'class' => $class,
            'ex_work'=>$data['ex_work'],
            ]);
        Session::flash('message', "Edited successfully");

        return redirect()->back();
        // var_dump($work);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->all();
        labour::destroy($id);
        // Session::flash('message', ' data delete successfuly!');
    }
    public function labourPdf(){
        // $pdf = PDF::loadView('admin.labour.labourpdf');
        // // $pdf->getFontMetrics()->get_font('freesans', '', 10);
        // return $pdf->download('itsolutionstuff.pdf');
        return view('admin.labour.labourpdf');
    }
    public function labourdata(request $request){
        $id = $request->id;
        $labour = labour::where("id", "=", $id)->first();
        return view('admin.labour.labourdata', compact('labour'));
    }

    
}