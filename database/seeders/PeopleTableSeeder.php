<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // シーダークラスを直接定義するやり方
        // DB::table('people')->insert([
        //     'name' => Str::random(5),
        //     'mail' => Str::random(10).'@example.com',
        //     'age' => 20,
        // ]);

        // モデルファクトリを用いた追加方法について
        People::factory()
                ->count(1)
                ->create();
    }
}
