window._ = require('lodash');

window.UIkit = require("../../vendor/uikit/uikit");
window.Icons = require("../../vendor/uikit/uikit/dist/js/uikit-icons");

UIkit.use(window.Icons);

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
