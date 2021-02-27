<template>
    <div>
        <vs-navbar center-collapsed square v-model="active">
            <template #left>
                <vs-navbar-item
                    :active="active == 'home'"
                    to="/"
                    id="home">
                        Home
                </vs-navbar-item >
                <vs-navbar-group :active="active == 'list'">
                    Books
                    <template #items>
                        <vs-navbar-item
                            :active="active == 'list'"
                            id="list"
                            @click="handleCategory()">
                            All Categories
                        </vs-navbar-item>
                        <vs-navbar-item
                            v-for="(c) in categories"
                            :key="c.id"
                            :active="active == c.name"
                            :id="c.name"
                            @click="handleCategory(c.id)">
                            {{c.name}}
                        </vs-navbar-item>
                    </template>
                </vs-navbar-group>
                <vs-navbar-item
                    :active="active == 'yourbooks'"
                    id="yourbooks"
                    v-if="isAuth"
                    @click="handleUserBooks()">
                        Your books
                </vs-navbar-item >
            </template>
            <template #right>
                <div class="d-flex" v-if="!isAuth">
                    <a href="/login" class="login">
                        <vs-button flat>Login</vs-button>
                    </a>
                    <a href="/register" class="register">
                        <vs-button flat>Register</vs-button>
                    </a>
                </div>

                 <div class="d-flex" v-else>
                    <a href="/dashboard" class="dashboard">
                        <vs-button flat>Dashboard</vs-button>
                    </a>
                    <a href="/logout" class="logout">
                        <vs-button flat>Log out</vs-button>
                    </a>
                </div>
            </template>
        </vs-navbar>
    </div>
</template>

<script>
import categoryResourse from '../api/category'
const categoryResource = new categoryResourse;

export default{
    data () {
       return {
           isAuth: this.$store.getters.isLoggedIn,
           categories: null,
           active: 'home'
       }
    },

    mounted() {
        this.getCategories();
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
        },

        handleUserBooks() {
            this.$router.push('/yourbooks');
        }
    },

    name: 'Menu'
}
</script>
