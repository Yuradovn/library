<template>
    <div class="margin">
        <vs-card v-for="(b) in books" :key="b.id" type="3">
            <template #title>
                <h3>{{b.title}}</h3>
                <h4>{{b.author}}</h4>
            </template>
            <template #img>
                <img :src="b.image" alt="">
            </template>
            <template #text>
                <p>
                    {{b.descr}}
                </p>
            </template>
            <template #interactions>
                <vs-button danger icon>
                    <i class='bx bx-heart'></i>
                </vs-button>
                <vs-button class="btn-chat" shadow primary>
                    <i class='bx bx-chat' ></i>
                    <span class="span">
              54
            </span>
                </vs-button>
            </template>
        </vs-card>
    </div>
</template>

<script>
import bookResourse from '../api/book'
const bookResource = new bookResourse
export default {
    data () {
        return {
            books: null
        }
    },
    methods: {
        async getBooks() {
            const {data} = await bookResource.list({category_id: this.$route.query.category_id})
            this.books = data
        }
    },
    mounted() {
      this.getBooks()
      this.$root.$on('category_changed', ()=>{
          this.getBooks()
      })
    },
    name: "List"
}
</script>

<style scoped>
    .margin {
        margin-top: 50px;
    }
</style>
