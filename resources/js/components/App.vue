<template>
    <div>
        <Menu/>
        <router-view></router-view>
    </div>
</template>

<script>
    import Menu from './Menu';

    export default{
        name: 'App',
        components: {
            Menu
        }
    }
</script>
