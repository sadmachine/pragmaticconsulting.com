try {
  window.utils = require("./utils");
} catch (e) {
  console.error(e);
}

$(function() {
  utils.initCustomFileEvents();
});
