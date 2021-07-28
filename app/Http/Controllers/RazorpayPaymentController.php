<?php
  
  namespace App\Http\Controllers;
 
  use Illuminate\Http\Request;
  use Razorpay\Api\Api;
  use Session;
  use Redirect;
class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payWithRazorpay()
    {        
        return view('razorpayView');
    }
 
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payment(Request $request)
    {
        //Input items of form
        $input = $request->all();
        //get API Configuration 
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
 
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
 
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
 
            // Do something here for store payment details in database...
        }
         
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}