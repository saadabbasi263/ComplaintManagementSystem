<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=1; $i <= 50; $i++){
	        DB::table('complaints')->insert([
	        	'customer_id' => $i,
	            'customer_name' => Str::random(5),
	            'status' => 'Active',
	            'complaint_desc' => 'test complaint',
	            'assigned_to' => 'csr',
	        ]);
	    }
    }
}
