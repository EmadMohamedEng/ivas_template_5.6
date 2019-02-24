<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Aflam',
                'image' => '1550152145324.jpg',
                'created_at' => '2019-02-14 13:49:05',
                'updated_at' => '2019-02-14 13:49:05',
                'parent_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Category 2',
                'image' => '155100968352.png',
                'created_at' => '2019-02-14 14:35:00',
                'updated_at' => '2019-02-24 12:01:23',
                'parent_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'sub category 1',
                'image' => '1551009642300.png',
                'created_at' => '2019-02-24 12:00:20',
                'updated_at' => '2019-02-24 12:00:42',
                'parent_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'sub category 2',
                'image' => '1551009636748.png',
                'created_at' => '2019-02-24 12:00:36',
                'updated_at' => '2019-02-24 12:00:36',
                'parent_id' => 2,
            ),
        ));
        
        
    }
}