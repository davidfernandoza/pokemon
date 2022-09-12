import 'bootstrap'
import _ from 'lodash'
import axios from 'axios'

window._ = _
window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.csrf_token = document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
if (window.csrf_token) window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.csrf_token
else console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
