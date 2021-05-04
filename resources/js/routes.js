import Vue from 'vue'; // Importing Vue Library
import VueRouter from 'vue-router';
// import Add from './components/Add.vue';
import register from './components/Register.vue';
// import Index from './components/Index.vue';
// import User_detail from './components/User_detail.vue';
// import add_post from './components/Add_post.vue';


Vue.use(VueRouter);

const routes = [
    {
        path: '/add',
        component:register,
        name:'add'
    },
    // {
    //     path: '/create',
    //     component: Add,
    //     name:'Add'
    // },
    // {
    //     path: '/edit_view/:id',
    //     component: Edit,
    //     name:'Edit'
    // },
    // {
    //     path: '/user_detail_view/:id',
    //     component: User_detail,
    //     name:'User Detail'
    // },
    // {
    //     path: '/add_post_view',
    //     component: add_post,
    //     name:'Add Post'
    // }
];


export default new VueRouter({
    mode :"history",
    routes
});
