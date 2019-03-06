<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contents')->delete();
        
        \DB::table('contents')->insert(array (
            0 => 
            array (
                'id' => 11,
                'title' => 'Content 1',
                'path' => '1550588179859.jpg',
                'image_preview' => NULL,
                'content_type_id' => 3,
                'category_id' => 1,
                'created_at' => '2019-02-19 09:14:20',
                'updated_at' => '2019-02-19 14:56:19',
            ),
            1 => 
            array (
                'id' => 14,
                'title' => 'content 4',
                'path' => '1551088582497.mp4',
                'image_preview' => '1551089340925.jpg',
                'content_type_id' => 5,
                'category_id' => 3,
                'created_at' => '2019-02-24 12:00:57',
                'updated_at' => '2019-02-25 10:09:00',
            ),
            2 => 
            array (
                'id' => 15,
                'title' => 's',
                'path' => '1551089383405.mp4',
                'image_preview' => '1551089383585.jpg',
                'content_type_id' => 5,
                'category_id' => 1,
                'created_at' => '2019-02-25 08:11:56',
                'updated_at' => '2019-02-25 10:09:43',
            ),
            3 => 
            array (
                'id' => 16,
                'title' => 'new',
                'path' => 'http://www.youtube.com/embed/bTOlMI5imqg?rel=0',
                'image_preview' => '1551860348331.jpg',
                'content_type_id' => 6,
                'category_id' => 1,
                'created_at' => '2019-03-06 08:02:21',
                'updated_at' => '2019-03-06 08:19:08',
            ),
            4 => 
            array (
                'id' => 17,
                'title' => 'new',
                'path' => 'https://www.youtube.com/embed/csBE9bxtkec?rel=0',
                'image_preview' => '1551860444704.jpg',
                'content_type_id' => 6,
                'category_id' => 1,
                'created_at' => '2019-03-06 08:20:31',
                'updated_at' => '2019-03-06 08:20:44',
            ),
        ));
        
        
    }
}