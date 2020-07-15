<template>
  <div class="l-titleauto p-titleauto">
    <div class="l-titleauto__panel p-titleauto__panel">
      <div class="p-titleauto__index">
        <div class="p-titleauto__header">肩書き情報</div>
        <div class="p-titleauto__header">※Twitterでつぶやいた肩書きの情報です</div>
        <div class="p-titleauto__sentence">
          <p>{{ TitleCards.maked_word }}</p>
        </div>
      </div>
      <div class="p-titleauto__body l-titleauto__body">
        <div class="l-titleauto__left c-card__infoleft">
          <p class="c-card__labeltitle">ひだり側の肩書き情報</p>
          <p>{{ Left_infos.word_left }}</p>
          <p class="c-card__labeltitle">ゲットしたときの肩書き</p>
          <p >{{ Left_infos.word_sentence }}</p>
          <p class="c-card__labeltitle">ゲット方法</p>
          <p>{{ Left_infos.get_method }}</p>
        </div>
        <div class="l-titleauto__right c-card__inforight">
          <p class="c-card__labeltitle">みぎ側の肩書き情報</p>
          <p>{{ Right_infos.word_right }}</p>
          <p class="c-card__labeltitle">ゲットしたときの肩書き</p>
          <p>{{ Right_infos.word_sentence }}</p>
          <p class="c-card__labeltitle">ゲット方法</p>
          <p>{{ Right_infos.get_method }}</p>
        </div>
      </div>
      <div>
        <a href="/title_cards_list" class="c-golist__btn">
          <i class="fas fa-backward"></i>
          肩書き一覧へ
        </a>
      </div>

      <a class="c-gotop__btn" href="/">自分で作ってみる</a>

    </div>
  </div>
</template>

<script>
    export default {
        props: {
          idnum: String,
        },
        data() {
          return {
            TitleCards: [],
            Right_infos: [],
            Left_infos: [],
          };
        },
        mounted: function() {
          const idnumber = this.idnum;
          this.$http.get('id/' + idnumber)
            .then(response => {
            this.TitleCards = response.data.TitleCardsData;
            this.Right_infos = response.data.Right_infoData;
            this.Left_infos = response.data.Left_infoData;
          });
        }
    }
</script>
