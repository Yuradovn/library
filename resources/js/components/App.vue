<template>
    <div>
        <Menu :isAuth="this.$store.getters.isLoggedIn"/>
        <router-view />
    </div>
</template>

<script>
    import Menu from './Menu';

    export default{
        beforeMount() {
            this.$store.commit('setAuthUser', window.auth_user);
            // console.log(this.$store.getters.isLoggedIn);
        },
        name: 'App',
        components: {
            Menu
        }
    }
</script>
