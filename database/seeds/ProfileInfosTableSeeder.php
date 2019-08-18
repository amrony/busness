<?php

use Illuminate\Database\Seeder;

class ProfileInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Industry::all()->each->delete();

        $data = [
            ['id' => 1, 'name' => 'Advertising & Marketing'],
            ['id' => 2, 'name' => 'Agriculture'],
            ['id' => 3, 'name' => 'Biotech/Pharmaceuticals'],
            ['id' => 4, 'name' => 'Construction & General Contracting'],
            ['id' => 5, 'name' => 'Consulting'],
            ['id' => 6, 'name' => 'E-Commerce'],
            ['id' => 7, 'name' => 'Education'],
            ['id' => 8, 'name' => 'Energy'],
            ['id' => 9, 'name' => 'Equipment Sales & Service'],
            ['id' => 10, 'name' => 'Financial Services'],
            ['id' => 11, 'name' => 'General'],
            ['id' => 12, 'name' => 'Government'],
            ['id' => 13, 'name' => 'Healthcare'],
            ['id' => 14, 'name' => 'Information Services'],
            ['id' => 15, 'name' => 'Insurance'],
            ['id' => 16, 'name' => 'Legal'],
            ['id' => 17, 'name' => 'Media & Entertainment'],
            ['id' => 18, 'name' => 'Non-Profit'],
            ['id' => 19, 'name' => 'Other'],
            ['id' => 20, 'name' => 'Real Estate'],
            ['id' => 21, 'name' => 'Restaurant'],
            ['id' => 22, 'name' => 'Retail'],
            ['id' => 23, 'name' => 'Services'],
            ['id' => 24, 'name' => 'Technology'],
            ['id' => 25, 'name' => 'Telecom/Utilities'],
            ['id' => 26, 'name' => 'Transportation/Logistics'],
            ['id' => 27, 'name' => 'Travel/Hospitality'],
            ['id' => 28, 'name' => 'Wholesale'],
        ];

        foreach ($data as $row){
            \App\Industry::create($row);
        }


    }
}
