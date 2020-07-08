<template>
  <div class="l-makerpage">
    <div class="l-makerpage__outline">
      <div class="l-makerpage__select p-makerpage__select">
         <div class="l-makerpage__leftarea p-makerpage__leftarea">
           <div class="l-makerpage__section">
             <div class="c-select__wrapper c-select__sell">
                <select v-model="leftselected">
                  <option disabled value="">ひだりの肩書きをえらぶ</option>
                  <option v-for="TitleData in TitleDatas"
                     v-bind:value="{
                     title: TitleData.word_left,
                     get: TitleData.get_method,
                     sentence: TitleData.word_sentence
                     }">
                      {{ TitleData.word_left }}
                  </option>
                </select>
             </div>
           </div>
         </div>
         <div class="l-makerpage__rightarea p-makerpage__rightarea">
           <div class="l-makerpage__section">
              <div class="c-select__wrapper c-select__sell">
                 <select v-model="rightselected">
                    <option disabled value="">みぎの肩書きをえらぶ</option>
                    <option v-for="TitleData in TitleDatas"
                       v-bind:value="{
                       title: TitleData.word_right,
                       get: TitleData.get_method,
                       sentence: TitleData.word_sentence
                       }">
                        {{ TitleData.word_right }}
                    </option>
                 </select>
              </div>
            </div>
         </div>
      </div>
      <div class="l-makerpage__result p-makerpage__result">
        <div v-show="showfade">
          <div class="c-card__result">
            <h4 class="c-card__top">作成した肩書き</h4>
            <p class="c-card__title">{{ leftselected.title }}{{ rightselected.title}}</p>
            <button @click="tweet" class="c-btn c-twitter__btn">
              <i class="fab fa-twitter"></i>ツイートする
            </button>
          </div>
          <div class="c-card__resultinfo">
            <p>もともとの肩書き：{{ rightselected.sentence }}</p>
            <p>ゲット方法：{{ rightselected.get }}</p>
            <p>もともとの肩書き：{{ leftselected.sentence }}</p>
            <p>ゲット方法：{{ leftselected.get }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data() {
          return {
            TitleDatas: [],
            leftselected: "",
            rightselected: "",
          };
        },

        mounted() {
          var self = this
          this.$http.get('api/show_title')
            .then(response => {this.TitleDatas = response.data;
          });
        },

        methods: {
          tweet: function(){
            const leftword = this.leftselected.title;
            const righttword = this.rightselected.title;
            var makedword = encodeURI(leftword + righttword);

            open(
              "https://twitter.com/intent/tweet?text=%E4%BD%9C%E6%88%90%E3%81%97%E3%81%9F%E8%82%A9%E6%9B%B8%E3%81%8D%EF%BC%9A" + makedword + "&url=https%3A%2F%2Fapplication-anch-tittlemaking.shikatana.com&hashtags=%E3%81%82%E3%81%A4%E6%A3%AE%E8%82%A9%E6%9B%B8%E3%81%8D%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC",
              "_blank"
            );
          }
        },

        computed: {
          showfade: {
            get(){
              if(this.leftselected !== "" && this.rightselected !== "")
            {
              return this.showfade = true
            }
              return this.showfade = false
            },
            set(val){}
          }
        }
    }
</script>
