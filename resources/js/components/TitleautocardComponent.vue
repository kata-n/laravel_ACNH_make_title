<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card">
                      <p>自動生成した肩書き</p>
                      <p>{{ TitleCards.maked_word }}</p>
                    </div>
                    <div class="card">
                      <p>左側の肩書き情報</p>
                      <p>{{ Left_infos.word_left }}</p>
                      <p>{{ Left_infos.word_sentence }}</p>
                      <p>{{ Left_infos.get_method }}</p>
                    </div>
                    <div class="card">
                      <p>みぎ側の肩書き情報</p>
                      <p>{{ Right_infos.word_right }}</p>
                      <p>{{ Right_infos.word_sentence }}</p>
                      <p>{{ Right_infos.get_method }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="/title_cards_list">もどる</a>
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
