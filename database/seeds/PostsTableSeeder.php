<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('posts')->delete();

        \DB::table('posts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'published_date' => '2019-03-06',
                'active' => 1,
                'patch_number' => '1245',
                'url' => 'http://localhost:8080/ivas_template_5.6/user/content/11?op_id=2&post_id=2',
                'content_id' => 11,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-25 08:45:40',
                'updated_at' => '2019-02-25 09:51:16',
            ),
            1 =>
            array (
                'id' => 3,
                'published_date' => '2019-02-22',
                'active' => 0,
                'patch_number' => '1545',
                'url' => 'http://localhost:8080/ivas_template_5.6/user/content/11?op_id=1&post_id=3',
                'content_id' => 11,
                'operator_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-02-25 09:54:14',
                'updated_at' => '2019-02-25 09:54:14',
            ),
            2 =>
            array (
                'id' => 4,
                'published_date' => '2019-02-22',
                'active' => 0,
                'patch_number' => '1545',
                'url' => 'http://localhost:8080/ivas_template_5.6/user/content/11?op_id=2&post_id=4',
                'content_id' => 11,
                'operator_id' => 2,
                'user_id' => 1,
                'created_at' => '2019-02-25 09:54:14',
                'updated_at' => '2019-02-25 09:54:14',
            ),
            3 =>
            array (
                'id' => 2,
                'published_date' => '2019-03-06',
                'active' => 1,
                'url' => 'http://localhost/ivas_template_last/user/content/23?op_id=4&post_id=2',
                'content_id' => 23,
                'operator_id' => 4,
                'user_id' => 1,
                'created_at' => '2019-02-25 09:54:14',
                'updated_at' => '2019-02-25 09:54:14',
            ),
        ));


    }
}
