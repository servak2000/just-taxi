export default {
    name: null,
    username: null,
    accessToken: null,
    isAuth() {
        this.load()
        return this.accessToken !== null
    },
    login(data) {
        localStorage.setItem('userData', JSON.stringify(data))
        this.username = data.login
        this.accessToken = data.accessToken
    },
    logout() {
        localStorage.removeItem('userData')
        this.username = null
        this.accessToken = null
    },
    load() {
        let data = localStorage.getItem('userData')
        if (data !== null && data !== '') {
            data = JSON.parse(data)
            this.username = data.login
            this.accessToken = data.accessToken
        }
    }
}