// import something here

// "async" is optional;
// more info on params: https://quasar.dev/quasar-cli/boot-files
// export default async (/* { app, router, Vue ... } */) => {
//   // something to do
// }
import Vue from 'vue'
import axios from 'axios'

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api'
})

Vue.prototype.$axios = axios
Vue.prototype.$api = api

// export default ({
//   Vue
// }) => {
//   Vue.prototype.$axios = axiosInstance
// }
export {
  axios,
  api
}
