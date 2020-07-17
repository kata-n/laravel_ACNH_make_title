<template>
  <div class="l-makerpage">
    <div class="l-makerpage__outline">
       <div class="l-makerpage__setting">
         <div class="l-makerpage__toptitle p-makerpage__toptitle">
        <div class="c-balloon__title">
          <div class="c-balloon__sentence">
            <p>の肩書きを作ってみよう！</p>
          </div>
        </div>
      </div>
         <div class="l-makerpage__select p-makerpage__select">
         <div class="l-makerpage__leftarea p-makerpage__leftarea">
           <div class="l-makerpage__section">
             <div class="c-select__wrapper c-select__sell">
                <select v-model="leftselected">
                  <option disabled value="">ひだり側の肩書きをえらぶ</option>
                  <option v-for="TitleData in TitleDatas"
                     v-bind:value="{
                     title: TitleData.word_left,
                     get: TitleData.get_method,
                     sentence: TitleData.word_sentence,
                     getmethod: TitleData.get_sentence
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
                    <option disabled value="">みぎ側の肩書きをえらぶ</option>
                    <option v-for="TitleData in TitleDatas"
                       v-bind:value="{
                       title: TitleData.word_right,
                       get: TitleData.get_method,
                       sentence: TitleData.word_sentence,
                       getmethod: TitleData.get_sentence
                       }">
                        {{ TitleData.word_right }}
                    </option>
                 </select>
              </div>
            </div>
         </div>
      </div>
        </div>
        <div class="l-makerpage__result p-makerpage__result">
         <transition>
          <div v-show="showfade">
            <div class="c-card__result">
              <h4 class="c-card__top">作成した肩書き</h4>
              <p class="c-card__title">{{ leftselected.title }}{{ rightselected.title}}</p>
              <button @click="tweet" class="c-btn c-twitter__btn">
                <i class="fab fa-twitter"></i>ツイートする
              </button>
            </div>
            <div class="c-card__resultinfo">
             <div class="c-card__leftinfo">
               <div class="c-card__lefthead">
                 <p>ひだり側</p>
               </div>
               <div class="c-card__body">
                 <p class="c-card__makerlabeltitle">もともとの肩書き</p>
                 <p class="c-card__makerlabelword">{{ leftselected.sentence }}</p>
                 <p class="c-card__makerlabeltitle">イベント名</p>
                 <p class="c-card__makerlabelword">{{ leftselected.get }}</p>
                 <p class="c-card__makerlabeltitle">ゲット方法</p>
                 <p class="c-card__makerlabelword">{{ leftselected.getmethod }}</p>
               </div>
             </div>
             <div class="c-card__rightinfo">
               <div class="c-card__righthead">
                 <p>みぎ側</p>
               </div>
               <div class="c-card__body">
                 <p class="c-card__makerlabeltitle">もともとの肩書き</p>
                 <p class="c-card__makerlabelword">{{ rightselected.sentence }}</p>
                 <p class="c-card__makerlabeltitle">イベント名</p>
                 <p class="c-card__makerlabelword">{{ rightselected.get }}</p>
                 <p class="c-card__makerlabeltitle">ゲット方法</p>
                 <p class="c-card__makerlabelword">{{ rightselected.getmethod }}</p>
               </div>
             </div>
            </div>
            <div class="c-btn__area">
              <a class="c-btn__retry" @click="uptop">作りなおす！</a>
            </div>
          </div>
        </transition>
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
              "https://twitter.com/intent/tweet?text=" + makedword + "&url=https%3A%2F%2Fapplication-anch-tittlemaking.shikatana.com&hashtags=%E3%81%82%E3%81%A4%E6%A3%AE%E8%82%A9%E6%9B%B8%E3%81%8D%E3%83%A1%E3%83%BC%E3%82%AB%E3%83%BC",
              "_blank"
            );
          },
          uptop: function(){
            window.scrollTo({
              top: 0,
              behavior: "smooth"
            });
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

<style>

.v-enter {
  opacity: 0;
}

.v-enter-to {
  opacity: 1;
}

.v-enter-active {
  transition: all 500ms;
}

</style>
