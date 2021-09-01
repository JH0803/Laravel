<?php
namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;

class Checkout_Controller extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckOut()
    {
        return view('checkout.blade.php');
    }

    public function placeOrder(Request $request)
    {
        $request->validate(
            [
                'order_number'      =>      'required|numeric',
                'user_id'           =>      'required|string',
                'status'            =>      'required|string',
                'grand_total'       =>      'required|numeric',
                'item_count'        =>      'required|numeric',
                'payment_status'    =>      'required|string',
                'payment_method'    =>      'required|string',
                'name'              =>      'required|string|max:20',
                'address'           =>      'required|string',
                'state'             =>      'required|string',
                'district'          =>      'required|string',
                'postcode'          =>      'required|string',
                'phone'             =>      'required|numeric|min:10',
                'notes'             =>      'required|string'
            ]
        );

        $dataArray              =       array(
            "order_number"          =>          $request->order_number,
            "user_id"               =>          $request->user_id,
            "status"                =>          $request->status,
            "grand_total"           =>          $request->grand_total,
            "item_count"            =>          $request->item_count,
            "payment_status"        =>          $request->payment_status,
            "payment_method"        =>          $request->payment_method,
            "name"                  =>          $request->name,
            "address"               =>          $request->address,
            "state"                 =>          $request->state,
            "district"              =>          $request->district,
            "postcode"              =>          $request->postcode,
            "phone"                 =>          $request->phone,
            "notes"                 =>          $request->notes,
        );

        $order = $this->orderRepository->OrderDetails($request->all());
        dd($order);
    }
}