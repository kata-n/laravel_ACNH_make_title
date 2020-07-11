<template>
  <div class="l-titleauto p-titleauto">
    <div class="l-titleauto__panel p-titleauto__panel">
      <div class="p-titleauto__index">
        <div class="p-titleauto__header">肩書き情報</div>
        <div class="p-titleauto__sentence">
          <p>{{ TitleCards.maked_word }}</p>
        </div>
      </div>
      <div class="p-titleauto__body">
        <div class="p-titleauto__left">
          <p>左側の肩書き情報</p>
          <p>{{ Left_infos.word_left }}</p>
          <p>{{ Left_infos.word_sentence }}</p>
          <p>{{ Left_infos.get_method }}</p>
        </div>
        <div class="p-titleauto__right">
          <p>みぎ側の肩書き情報</p>
          <p>{{ Right_infos.word_right }}</p>
          <p>{{ Right_infos.word_sentence }}</p>
          <p>{{ Right_infos.get_method }}</p>
        </div>
      </div>
      <div>
        <a href="/title_cards_list">もどる</a>
      </div>
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
