<template>
  <div class="l-cardlist">
    <div class="l-cardlist__panel">
      <li v-for="TitleData in TitleDatas" class="c-cardlist__index">
        <a v-bind:href="'/title_cards/' + TitleData.id">
          <div class="c-panel__container">
            <p class="c-panel__title">肩書き名</p>
            <p class="c-panel__word">{{ TitleData.maked_word }}</p>
          </div>
        </a>
      </li>
    </div>
  </div>
</template>

<script>
    export default {
        data() {
          return {
            TitleDatas: [],
          };
        },

        mounted() {
          this.$http.get('/title_card')
            .then(response => {this.TitleDatas = response.data.TitleListData;
          });
        },

    }
</script>
