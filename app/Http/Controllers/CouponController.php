<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

    public function index()
    {
        return view('coupons.index', [
            'coupons' => Coupon::all(),
        ]);
    }

    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        // ensure code is a slug
        $request->merge(['code' => str_slug($request->input('code'))]);

        // rules
        $rules = [
            'code'    => 'required',
            'name'    => 'required',
            'message' => 'required',
        ];

        // validate
        $this->validate($request, $rules);

        // create
        Coupon::create($request->only(['code', 'name', 'message']));

        return redirect()->route('home');
    }

    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', [
            'coupon' => $coupon
        ]);
    }

    public function update(Request $request, Coupon $coupon)
    {
        // ensure code is a slug
        $request->merge(['code' => str_slug($request->input('code'))]);

        // rules
        $rules = [
            'code'    => 'required',
            'name'    => 'required',
            'message' => 'required',
        ];

        // validate
        $this->validate($request, $rules);

        // update
        $coupon->update($request->only(['code', 'name', 'message']));

        return redirect()->route('home');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('home');
    }

}
