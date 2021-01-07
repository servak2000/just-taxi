<template>
  <div class="container profile">
    <h4>{{user.username}}</h4>
    <hr>
    <button class="btn btn-danger" v-on:click="logout">Выйти</button>
  </div>
</template>

<script>
import user from '@/components/user/user'
export default {
  name: "Profile",
  data() {
    return {
      user: user
    }
  },
  methods: {
    logout() {
      user.logout()
      location.href = '/'
    }
  }
}
</script>