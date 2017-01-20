<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Order;

class PublicController extends Controller
{
	public function index(){
		$categories = Category::all();
        $page_title = 'DrFix Home';
		return view('public_home', compact('categories','page_title'));
	}

    //new instance of controller for contact page
    public function contact()
    {
        return view('contact');
    }

    public function autocompleteBrands(Request $request)
    {
    	$red = 'red';
    	$category = $request->category_id;
	    $brands = Brand::where('category_id','=',$category)->get();
	    return $brands;
    }

    public function autocompleteModels(Request $request)
    {
    	$brand = $request->brand_id;
    	$models = Device::where('brand_id','=',$brand)->get();
    	return $models;
    }

    public function requestFix(Request $request)
    {
    	$this->validate($request, [
    		'model' => 'required',
    	]);
    	$model = Device::find($request->model);
    	return view('request_fix_form', compact('model'));
    }

    public function submitOrder(Request $request)
    {

    	$this->validate($request, [
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email',
    		'category' => 'required|exists:categories,name',
    		'brand_name' => 'required|exists:brands,name',
    		'model_name' => 'required|exists:devices,model',
    		'phone' => 'required|min:11',
    		'pickup_address' => 'required',
    		'pickup_date' => 'required|date',
    	]);
        function crypto_rand_secure($min, $max)
        {
            $range = $max - $min;
            if ($range < 1) return $min; // not so random...
            $log = ceil(log($range, 2));
            $bytes = (int) ($log / 8) + 1; // length in bytes
            $bits = (int) $log + 1; // length in bits
            $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
            do {
                $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
                $rnd = $rnd & $filter; // discard irrelevant bits
            } while ($rnd > $range);
            return $min + $rnd;
        }

        function getToken($length)
        {
            $order_id = "";
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet.= "0123456789";
            $max = strlen($codeAlphabet); // edited

            for ($i=0; $i < $length; $i++) {
                $order_id .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
            }

            return $order_id;
        }
        $order_id = getToken(6);
        $order = Order::create([
            'order_id' => $order_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'category'=> $request->category,
            'brand' => $request->brand_name,
            'model' => $request->model_name,
            'phone' => '+234-'.$request->phone,
            'pickup_address' => $request->pickup_address,
            'pickup_date' => $request->pickup_date,
         ]);
        $fullname = $request->firstname.' '.$request->lastname;
        return view('order_confirmation', compact('order_id','fullname'));
    }

}

