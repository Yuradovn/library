<template>
    <div>
        <vs-navbar center-collapsed square v-model="active">
            <template #left>
                <vs-navbar-item :active="active == 'home'" to="/" id="home">
                    Home
                </vs-navbar-item >
                <vs-navbar-group :active="active == 'list'">
                    Books
                    <template #items>
                        <vs-navbar-item :active="active == 'list'" id="list" @click="handleCategory()">
                            All Categories
                        </vs-navbar-item>
                        <vs-navbar-item v-for="(c) in categories" :key="c.id" :active="active == c.name" :id="c.name" @click="handleCategory(c.id)">
                            {{c.name}}
                        </vs-navbar-item>
                    </template>
                </vs-navbar-group>

            </template>
            <template #right>
                <vs-button flat >Login</vs-button>
                <vs-button>Get Started</vs-button>
            </template>
        </vs-navbar>
    </div>
</template>

<script>
import categoryResourse from '../api/category'
const categoryResource = new categoryResourse
export default{
    data () {
       return {
           categories: null,
           active: ''
       }
    },
    methods: {
        async getCategories() {
            const {data} = await categoryResource.list()
            this.categories = data
        },
        handleCategory (id = null) {

            if (id == null) {
                this.$router.push({path: '/list'}).then(()=>{
                    this.$root.$emit('category_changed')
                })
            }
            else {
                this.$router.push({path: '/list', query: {category_id: id}}).then(()=>{
                    this.$root.$emit('category_changed')
                })
            }
        }
    },
    mounted() {
        this.getCategories()
    },
    name: 'Menu'
}
</script>
