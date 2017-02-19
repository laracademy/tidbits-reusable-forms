<?php

use Illuminate\Database\Seeder;

class CouponSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Coupon::class, 10)->create();
    }
}
