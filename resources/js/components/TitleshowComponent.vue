<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

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
                    <p>{{ leftselected.get }}</p>
                    <p>{{ leftselected.sentence }}</p>

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
                    <p>{{ rightselected.get }}</p>
                    <p>{{ rightselected.sentence }}</p>

                    <div v-show="showfade">
                      <p>Twitterに投稿しますか？</p>
                      <h3>作った肩書き</h3>
                      <p>{{ leftselected.title }}{{ rightselected.title}}</p>
                      <button @click="tweet" class="btn__twitter">
                        <i class="fab fa-twitter fa-lg mr-3"></i>ツイートする
                      </button>
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
              "https://twitter.com/intent/tweet?text=" + makedword + "&url=https%3A%2F%2Fapplication-keigen-quiz.shikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
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
