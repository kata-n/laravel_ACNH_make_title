<?php

use Illuminate\Database\Seeder;

class AcnhWordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $words = [
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
          $words3 = [
            'word_sentence' => 'いっぱしの釣り好き',
            'word_right' => '釣り好き',
            'word_left' => 'いっぱしの',
            'get_method' => '目指せ、釣り名人',
          ],
          $words4 = [
            'word_sentence' => 'それなりのビーチボーイ、ビーチガール',
            'word_right' => 'ビーチボーイ、ビーチガール',
            'word_left' => 'それなりの',
            'get_method' => '目指せ、釣り名人',
          ],
          $words5 = [
            'word_sentence' => '雑魚のサカナ好き',
            'word_right' => 'サカナ好き',
            'word_left' => '雑魚の',
            'get_method' => 'サカナ博士になろう',
          ],
          $words6 = [
            'word_sentence' => 'ピチピチの釣り師',
            'word_right' => '釣り師',
            'word_left' => 'ピチピチの',
            'get_method' => 'サカナ博士になろう',
          ],
          $words6 = [
            'word_sentence' => '養殖の熱帯魚',
            'word_right' => '熱帯魚',
            'word_left' => '養殖の',
            'get_method' => 'サカナ博士になろう',
          ],
          $words7 = [
            'word_sentence' => '養殖の熱帯魚',
            'word_right' => '熱帯魚',
            'word_left' => '養殖の',
            'get_method' => '全ての基本はあいさつから！',
          ],
          $words8 = [
            'word_sentence' => 'うまれたてのたまご',
            'word_right' => 'たまご',
            'word_left' => 'うまれたての',
            'get_method' => '昆虫ハンターへの道！',
          ],
          $words9 = [
            'word_sentence' => '最弱の幼虫',
            'word_right' => '幼虫',
            'word_left' => '最弱の',
            'get_method' => '昆虫ハンターへの道！',
          ],
          $words10 = [
            'word_sentence' => '一皮むけそうなサナギ',
            'word_right' => 'サナギ',
            'word_left' => '一皮むけそうな',
            'get_method' => '昆虫ハンターへの道！',
          ],
          $words11 = [
            'word_sentence' => '一皮むけそうなサナギ',
            'word_right' => 'ムシ好き',
            'word_left' => '趣味程度の',
            'get_method' => '昆虫博士になれるかな？！',
          ],
          $words12 = [
            'word_sentence' => '夜行性のムシ',
            'word_right' => 'ムシ',
            'word_left' => '夜行性の',
            'get_method' => '昆虫博士になれるかな？！',
          ],
          $words13 = [
            'word_sentence' => 'アリよりのアリ',
            'word_right' => 'アリ',
            'word_left' => 'アリよりの',
            'get_method' => '昆虫博士になれるかな？！',
          ],
          $words14 = [
            'word_sentence' => '雑学の代表',
            'word_right' => '代表',
            'word_left' => '雑学の',
            'get_method' => 'DIYのレシピを増やそう',
          ],
          $words15 = [
            'word_sentence' => '物知りな知識人',
            'word_right' => '知識人',
            'word_left' => '物知りな',
            'get_method' => 'DIYのレシピを増やそう',
          ],
        ];
        foreach ($words as $word) {
        DB::table('words')->insert($word);
        }
    }
}
