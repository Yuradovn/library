<template>
  <div class="margin">
    <div class="books">
      <vs-card class="book" v-for="b in books" :key="b.id" type="3">
        <template #title>
          <h3>{{ b.title }}</h3>
          <h6>{{ b.author }}</h6>
        </template>
        <template #img>
          <img :src="b.image" alt="" />
        </template>
        <template #text>
          <p>{{ b.descr }}...</p>
        </template>
        <template #interactions> </template>
      </vs-card>
    </div>
    <div class="center">
      <vs-pagination
        circle
        v-model="page"
        :length="totalPages"
        @input="handlePageChange"
      />
    </div>
  </div>
</template>

<script>
import userBookResourse from '../api/userBook';
const userBookResource = new userBookResourse;
export default {
  
    data() {
        return {
            totalPages: 0,
            page: 1,
            books: null,
        };
    },

    mounted() {
        this.getBooks();
    },

    methods: {
        async getBooks(page = 1) {
            const {data} = await userBookResource.list({page})
            this.books = data.data
            this.totalPages = data.meta.last_page
            this.page = data.meta.current_page
            
        },
        handlePageChange() {
            this.getBooks(this.page);
        },
  },
  
  name: "UserBooks",
};
</script>

<style scoped>
.margin {
  margin-top: 50px;
}
</style>