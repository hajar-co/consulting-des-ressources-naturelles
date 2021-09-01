import axios from 'axios'

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000',
})

api.interceptors.request.use(
  (res) => res,
  (err) => {
    if (err.response.status === 401) this.$store.dispatch('logout')
    return Promise.reject(err)
  }
)

export default api