<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class EsewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if( isset($request->oid) && isset($request->amt) && isset($request->refId))
    	{
    		$order = Order::where('invoice_no', $request->oid)->first();
    		//dd($order);
    		if( $order)
    		{
    			$url = "https://uat.esewa.com.np/epay/transrec";
				$data =[
				    'amt'=> $order->price,
				    'rid'=> $request->refId,
				    'pid'=> $order->invoice_no,
				    'scd'=> 'epay_payment'
				];

			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_POST, true);
			    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			    $response = curl_exec($curl);
			    //dd($response);
			    curl_close($curl);

			    $response_code = $this->get_xml_node_value('response_code',$response );
			    //dd($response_code);
			    if( trim($response_code) == 'Success')
			    {
			    	$order->status = 1;
			    	$order->save();
			    	return redirect()->route('cart.index')->with('success_message', 'Transaction completed.');
			    }
    		}	

    		
    	}

    }
    public function get_xml_node_value($node, $xml) {
	    if ($xml == false) {
	        return false;
	    }
	    $found = preg_match('#<'.$node.'(?:\s+[^>]+)?>(.*?)'.
	            '</'.$node.'>#s', $xml, $matches);
	    if ($found != false) {
	        
	            return $matches[1]; 
	         
	    }	  

    return false;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
