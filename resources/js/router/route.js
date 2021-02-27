import VueRouter from 'vue-router';
import Home from '../components/Home';
import UserBooks from '../components/UserBooks';
import List from "../components/List";

export default new VueRouter ({
    routes: [
        {
            path: '',
            name: 'home',
            component: Home
        },

        {
            path: '/list',
            name: 'list',
            component: List
        },

        {
            path: '/yourbooks',
            name: 'yourbooks',
            component: UserBooks
        }

    ]
});
