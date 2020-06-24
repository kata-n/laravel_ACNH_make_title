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
      //DBのクリア
      DB::table('words')->truncate();

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
          $words16 = [
            'word_sentence' => '控えめに言って有識者',
            'word_right' => '有識者',
            'word_left' => '控えめに言って',
            'get_method' => 'DIYのレシピを増やそう',
          ],
          $words17 = [
            'word_sentence' => '知識欲の虜',
            'word_right' => '虜',
            'word_left' => '知識欲の',
            'get_method' => 'DIYのレシピを増やそう',
          ],
          $words18 = [
            'word_sentence' => 'ものづくりの愛好家',
            'word_right' => '愛好家',
            'word_left' => 'ものづくりの',
            'get_method' => '暮らしの基本は道具作りから',
          ],
          $words19 = [
            'word_sentence' => 'クラフト系の部員',
            'word_right' => '部員',
            'word_left' => 'クラフト系の',
            'get_method' => '暮らしの基本は道具作りから',
          ],
          $words20 = [
            'word_sentence' => 'イケてるスペシャリスト',
            'word_right' => 'スペシャリスト',
            'word_left' => 'イケてる',
            'get_method' => '暮らしの基本は道具作りから',
          ],
          $words21 = [
            'word_sentence' => '半人前の職人',
            'word_right' => '職人',
            'word_left' => '半人前の',
            'get_method' => '手作り家具で 暮らしを豊かに',
          ],
          $words22 = [
            'word_sentence' => 'オンリーワンの変わり者',
            'word_right' => '変わり者',
            'word_left' => 'オンリーワンの',
            'get_method' => 'リメイクの達人になろう！',
          ],
          $words23 = [
            'word_sentence' => 'オンリーワンの変わり者',
            'word_right' => 'プロデューサー',
            'word_left' => '某・',
            'get_method' => '森のウッドカッター！',
          ],
          $words24 = [
            'word_sentence' => '切れ味のいいソルジャー',
            'word_right' => 'ソルジャー',
            'word_left' => '切れ味のいい',
            'get_method' => '森のウッドカッター！',
          ],
          $words25 = [
            'word_sentence' => 'ヤンチャなお調子者',
            'word_right' => 'お調子者',
            'word_left' => 'ヤンチャな',
            'get_method' => '道具クラッシャー！',
          ],
          $words26 = [
            'word_sentence' => '勢いあまったクラッシャー',
            'word_right' => 'クラッシャー',
            'word_left' => '勢いあまった',
            'get_method' => '道具クラッシャー！',
          ],
          $words27 = [
            'word_sentence' => '暴れん坊なあらくれ者',
            'word_right' => 'あらくれ者',
            'word_left' => '暴れん坊な',
            'get_method' => '道具クラッシャー！',
          ],
          $words28 = [
            'word_sentence' => '加減を知らないデストロイヤー',
            'word_right' => 'デストロイヤー',
            'word_left' => '加減を知らない',
            'get_method' => '道具クラッシャー！',
          ],
          $words29 = [
            'word_sentence' => '体育会系の筋肉',
            'word_right' => '筋肉',
            'word_left' => '体育会系の',
            'get_method' => '岩たたきのプロだなも！',
          ],
          $words30 = [
            'word_sentence' => '発掘された化石',
            'word_right' => '化石',
            'word_left' => '発掘された',
            'get_method' => 'かせき発掘人に認定だなも！',
          ],
          $words31 = [
            'word_sentence' => '名もなき何か',
            'word_right' => '何か',
            'word_left' => '名もなき',
            'get_method' => 'なんのかせきかな？！',
          ],
          $words32 = [
            'word_sentence' => '古の真実',
            'word_right' => '真実',
            'word_left' => '古の',
            'get_method' => 'なんのかせきかな？！',
          ],
          $words33 = [
            'word_sentence' => '歴史好きの知識人',
            'word_right' => '知識人',
            'word_left' => '歴史好きの',
            'get_method' => 'なんのかせきかな？！',
          ],
          $words34 = [
            'word_sentence' => '雑食の掃除人',
            'word_right' => '掃除人',
            'word_left' => '雑食の',
            'get_method' => '草むしりボランティア募集',
          ],
          $words35 = [
            'word_sentence' => '草食系の仕掛人',
            'word_right' => '仕掛人',
            'word_left' => '草食系の',
            'get_method' => '草むしりボランティア募集',
          ],
          $words35 = [
            'word_sentence' => 'ボーボーの雑草',
            'word_right' => '雑草',
            'word_left' => 'ボーボーの',
            'get_method' => '草むしりボランティア募集',
          ],
          $words36 = [
            'word_sentence' => 'ワイルドな獣',
            'word_right' => '獣',
            'word_left' => 'ワイルドな',
            'get_method' => '草むしりボランティア募集',
          ],
          $words37 = [
            'word_sentence' => '温室育ちの花',
            'word_right' => '花',
            'word_left' => '温室育ちの',
            'get_method' => 'エンジョイ・ガーデニング！',
          ],
          $words37 = [
            'word_sentence' => 'トゲのある薔薇',
            'word_right' => '薔薇',
            'word_left' => 'トゲのある',
            'get_method' => 'エンジョイ・ガーデニング！',
          ],
          $words38 = [
            'word_sentence' => '楽園の癒し',
            'word_right' => '癒し',
            'word_left' => '楽園の',
            'get_method' => 'エンジョイ・ガーデニング！',
          ],
          $words39 = [
            'word_sentence' => '粋なはからい',
            'word_right' => 'はからい',
            'word_left' => '粋な',
            'get_method' => '水やりで花のあるくらし',
          ],
          $words40 = [
            'word_sentence' => 'マメな世話好き',
            'word_right' => '世話好き',
            'word_left' => 'マメな',
            'get_method' => '水やりで花のあるくらし',
          ],
        ];
        foreach ($words as $word) {
        DB::table('words')->insert($word);
        }
    }
}
