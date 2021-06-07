<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;
use Session;
use stdClass;

class farmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers =Farmer::get();
        return view('admin.farmer.index',compact("farmers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.farmer.create');
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
            'farmer_id'=>'required',
            'date' => 'required|date',
            'farmer_name' => 'required',
          

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
  


        $app = Farmer::create([
            'farmer_id' => $data['farmer_id'],
            'date' => $data['date'],
            'farmer_name' => $data['farmer_name'],
            'work_time' => $data['work_time'],
            'land' => $data['land'],
            
            'mobile' => $data['mobile'],
            'aadhar_no' => $data['aadhar_no'],
          
            'labour_no' => $data['labour_no'],
            'samagr' => $data['samagr'],
            'village' => $data['village'],
            'posto' => $data['posto'],
            'tehsil' => $data['tehsil'],
            'district' => $data['district'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'gender' => $data['gender'],
          
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
        // var_dump($work);

        Session::flash('message', 'किसान सफलतापूर्वक जोड़ा गया!');
        return redirect()->route('farmer.index');
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
        $farmer = Farmer::where("id", "=", $id)->first();

        return view('admin.farmer.edit',compact("farmer"));    
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
        $request->validate([
            'farmer_id'=>'required',
            'date' => 'required|date',
            'farmer_name' => 'required',
          

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
        if (count($request->get('year')) > 0) {
            $year = serialize($request->get('year'));
        } else {
            $year = $request->get('year');
        }
        if (count($request->get('marks')) > 0) {
            $marks = serialize($request->get('marks'));
        } else {
            $marks = $request->get('marks');
        }
        if (count($request->get('max')) > 0) {
            $max = serialize($request->get('max'));
        } else {
            $max = $request->get('max');
        }
        if (count($request->get('percentage')) > 0) {
            $percentage = serialize($request->get('percentage'));
        } else {
            $percentage = $request->get('percentage');
        }


        $app = Farmer::where('id', $id)
        ->update([
            'farmer_id' => $data['farmer_id'],
            'date' => $data['date'],
            'farmer_name' => $data['farmer_name'],
            'work_time' => $data['work_time'],
            'land' => $data['land'],
            
            'mobile' => $data['mobile'],
            'aadhar_no' => $data['aadhar_no'],
          
            'labour_no' => $data['labour_no'],
            'samagr' => $data['samagr'],
            'village' => $data['village'],
            'posto' => $data['posto'],
            'tehsil' => $data['tehsil'],
            'district' => $data['district'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'gender' => $data['gender'],
          
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
        Farmer::destroy($id);
    }
    public function farmerPdf(){
        // $pdf = PDF::loadView('admin.labour.labourpdf');
        // // $pdf->getFontMetrics()->get_font('freesans', '', 10);
        // return $pdf->download('itsolutionstuff.pdf');
        return view('admin.farmer.farmerpdf');
    }
    public function farmerdata(request $request){
        $id = $request->id;
        $labour = Farmer::where("id", "=", $id)->first();
        return view('admin.farmer.farmerpdfdata', compact('labour'));
    }

    
}
