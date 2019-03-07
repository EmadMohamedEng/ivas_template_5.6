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
                'title' => 'aflam sub category 1',
                'image' => '1551009642300.png',
                'created_at' => '2019-02-24 12:00:20',
                'updated_at' => '2019-03-07 10:15:58',
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
            4 => 
            array (
                'id' => 5,
                'title' => 'sub_sub categ',
                'image' => '1551951730349.jpg',
                'created_at' => '2019-03-07 09:40:57',
                'updated_at' => '2019-03-07 09:42:10',
                'parent_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Category 5',
                'image' => '1551955150891.jpg',
                'created_at' => '2019-03-07 10:39:10',
                'updated_at' => '2019-03-07 10:39:10',
                'parent_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Category 5 sub 1',
                'image' => '1551955166326.jpg',
                'created_at' => '2019-03-07 10:39:26',
                'updated_at' => '2019-03-07 10:39:26',
                'parent_id' => 6,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Category 5 sub 1 sub 1',
                'image' => '1551955192208.jpg',
                'created_at' => '2019-03-07 10:39:52',
                'updated_at' => '2019-03-07 10:39:52',
                'parent_id' => 7,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Category 5 sub 1 sub1 sub 1',
                'image' => '1551955214424.jpg',
                'created_at' => '2019-03-07 10:40:14',
                'updated_at' => '2019-03-07 10:40:14',
                'parent_id' => 8,
            ),
        ));
        
        
    }
}