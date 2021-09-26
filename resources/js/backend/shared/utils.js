export function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}

/**
 * Randomize array element order in-place.
 * Using Durstenfeld shuffle algorithm.
 */
export const shuffleArray = (array) => {
  for (let i = array.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1))
    let temp = array[i]
    array[i] = array[j]
    array[j] = temp
  }
  return array
}

export function setQueryParam(key, value) {
  const params = new URLSearchParams(location.search);
  params.set(key, value);
  updateQueryString(params)
}

export function deleteQueryParam(key) {
  const params = new URLSearchParams(location.search);
  params.delete(key);
  updateQueryString(params)
}
export function updateQueryString(params) {
  window.history.replaceState(
    {},
    "",
    `${location.pathname}?${params.toString()}`
  );
}

export function getFromQueryString(key) {
  const urlParams = new URLSearchParams(location.search);
  return urlParams.get(key);
}


export const axiosCallOnce = {
  call: undefined,

  cancelCallHandler: function () {
    if (this.call) {
      this.call.cancel("Only one request allowed at a time.");
    }
    this.call = axios.CancelToken.source();

    return this.call.token
  },

  get: function (url, options) {
    options.cancelToken = this.cancelCallHandler()

    return axios.get(url, options);
  },

  post: function (url, data, options) {
    options.cancelToken = this.cancelCallHandler()

    return axios.post(url, data, options);
  },
}


export function loadVueComponentsFromDirectory(Vue, files) {
  files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
}

