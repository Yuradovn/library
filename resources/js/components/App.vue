<template>
    <div>
        <Menu 
            :isAuth="this.$store.getters.isLoggedIn"
            :user="this.$store.getters.getUser"
        />
        <router-view />
    </div>
</template>

<script>
    import Menu from './Menu';

    export default{
        beforeMount() {
            this.$store.commit('setAuthUser', window.auth_user);
        },
        name: 'App',
        components: {
            Menu
        }
    }
</script>
