<?php

use Illuminate\Database\Seeder;

class MakeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cryptos = [
          $words1 = [
            'word_sentence' => 'たぬき開発の客',
            'word_right' => '客',
            'word_left' => 'たぬき開発の',
            'get_method' => '島へようこそ！',
          ],
          $words2 = [
            'word_sentence' => '卒業したてのボウズ',
            'word_right' => 'ボウズ',
            'word_left' => '卒業したての',
            'get_method' => '目指せ、釣り名人',
          ],
        ];
        foreach ($cryptos as $crypto) {
        DB::table('crypto_details')->insert($crypto);
        }
    }
}
