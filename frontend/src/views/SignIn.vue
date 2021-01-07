<template>
  <div class="sign-in">
    <div class="row">
      <div class="col-md-5 m-auto">
        <h1>Авторизация</h1>
        <form @submit="signIn">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" v-model="username">
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" v-model="password">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import user from "@/components/user/user";
export default {
  name: "SignIn",
  data() {
    return {
      username: '',
      password: ''
    }
  },
  methods: {
    signIn: function (e) {
      e.preventDefault()
      const submissionData = {
        username: this.username,
        password: this.password
      }
      this.$http.post('/user/login', submissionData)
          .then((response) => {
            user.login(response.data)
            location.href = '/'
          })
          .catch((error) => alert(error.response.data.statusText))
    }
  }
}
</script>
