<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 2;$i++)
        {
            DB::table('slide')->insert(
                [
                    'Ten' => 'Slide'.$i,
                    'Hinh' => $i.'.jpg',
                    'NoiDung' => 'NoiDung',
                    'link' => 'google.com',
                    'created_at' => new DateTime()
                ]
            );
        }

    }
}
