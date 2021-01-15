import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Employees from "@/views/Employees"
import Feedback from "@/views/Feedback"
import Cars from "@/views/Cars"
import SignIn from "@/views/SignIn";
import Profile from "@/views/Profile";
import Car from "@/views/Car";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/employees',
    name: 'Employees',
    component: Employees
  },
  {
    path: '/feedback',
    name: 'Feedback',
    component: Feedback
  },
  {
    path: '/cars',
    name: 'Cars',
    component: Cars
  },
  {
    path: '/sign-in',
    name: 'SignIn',
    component: SignIn
  },
  {
    path: '/profile',
    name: 'Profile',
    component: Profile
  },
  {
    path: '/cars/:url',
    name: 'Car',
    component: Car
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
