<template>
    <div>
        <Menu
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
