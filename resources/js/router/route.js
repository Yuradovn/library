import VueRouter from 'vue-router';
import Home from '../components/Home';
import Hello from '../components/Hello';
import List from "../components/List";

export default new VueRouter ({
    routes: [
        {
            path: '',
            name: 'home',
            component: Home
        },

        {
            path: '/hello',
            name: 'hello',
            component: Hello
        },

        {
            path: '/list',
            name: 'list',
            component: List
        }

    ]
});
