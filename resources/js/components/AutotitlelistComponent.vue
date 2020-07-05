<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                <li v-for="TitleData in TitleDatas">
                <p>称号名</p>
                {{ TitleData.maked_word }}
                <a v-bind:href="'/title_cards/' + TitleData.id">くわしく</a>
                </li>

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
          };
        },

        mounted() {
          this.$http.get('/title_card')
            .then(response => {this.TitleDatas = response.data.TitleListData;
          });
        },

    }
</script>
