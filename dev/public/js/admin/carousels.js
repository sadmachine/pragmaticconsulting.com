/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 71);
/******/ })
/************************************************************************/
/******/ ({

/***/ 71:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(72);


/***/ }),

/***/ 72:
/***/ (function(module, exports, __webpack_require__) {

try {
  window.carousels = __webpack_require__(73);
} catch (e) {
  console.error(e);
}
window.carousel_item_updated = false;

$("#mdl_carouselItemImage").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var src = button.data("src") + "?" + Math.random() * 10000000; // Extract info from data-* attributes
  var alt = button.data("alt"); // Extract info from data-* attributes
  var item_id = button.data("itemId"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  var img = modal.find(".modal-body img");
  var carousel_item_id_field = modal.find("#update_carousel_item_id");
  img.prop("src", src);
  img.prop("alt", alt);
  carousel_item_id_field.prop("value", item_id);
});

$(function () {
  $(".save-item-changes").each(function () {
    $(this).prop("disabled", true);
  });

  $("#carousel_items_table textarea").on("input", function () {
    carousels.showUpdateButton();
  });

  utils.initCustomFileEvents();

  $(window).bind("beforeunload", function () {
    if (window.carousel_item_updated) return true;
  });
});

/***/ }),

/***/ 73:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (immutable) */ __webpack_exports__["allowDrop"] = allowDrop;
/* harmony export (immutable) */ __webpack_exports__["drag"] = drag;
/* harmony export (immutable) */ __webpack_exports__["drop"] = drop;
/* harmony export (immutable) */ __webpack_exports__["showUpdateButton"] = showUpdateButton;
/* harmony export (immutable) */ __webpack_exports__["saveCarouselItemChanges"] = saveCarouselItemChanges;
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var dragged = document.getElementById(data);
  while (dragged && dragged.parentNode && dragged.tagName != "TR") {
    dragged = dragged.parentNode;
  }

  var dropzone = ev.target;
  while (dropzone && dropzone.parentNode && dropzone.tagName != "TR") {
    dropzone = dropzone.parentNode;
  }

  var parent = dragged.parentNode;
  if (!dropzone.nextElementSibling) {
    parent.append(dragged);
  } else if (dragged.nextElementSibling == dropzone) {
    dropzone = dropzone.nextElementSibling;
    parent.insertBefore(dragged, dropzone);
  } else {
    parent.insertBefore(dragged, dropzone);
  }
  showUpdateButton();
}

function showUpdateButton() {
  if (!window.carousel_item_updated) {
    window.carousel_item_updated = true;
    $(".save-item-changes").each(function () {
      $(this).prop("disabled", false);
    });
  }
}

function saveCarouselItemChanges(csrf_token) {
  var table = $("#carousel_items_table");
  var order = 1;
  var items = [];
  table.find(".data-row").each(function () {
    var current_id = $(this).data("itemId");
    var update_title = $(this).find("textarea").val();
    var item_info = { id: current_id, title: update_title, order: order };
    items.push(item_info);
    order++;
  });
  var parameters = {
    _token: csrf_token,
    items: JSON.stringify(items)
  };
  $.post("update-carousel-items", parameters, function (data) {
    data = JSON.parse(data);
    if (data.response) {
      window.carousel_item_updated = false;
      $("#carousel_lookup button[name='lookup']").click();
    } else {
      alert("Failed to save changes to carousel items. Please contact the system administrator.");
    }
  });
}

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgYTYyYjFiNTZkYTlhMTY2YWM1NjgiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9hZG1pbi9jYXJvdXNlbHMuanMiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9hZG1pbi9zcmMvY2Fyb3VzZWxzLmpzIl0sIm5hbWVzIjpbIndpbmRvdyIsImNhcm91c2VscyIsInJlcXVpcmUiLCJlIiwiY29uc29sZSIsImVycm9yIiwiY2Fyb3VzZWxfaXRlbV91cGRhdGVkIiwiJCIsIm9uIiwiZXZlbnQiLCJidXR0b24iLCJyZWxhdGVkVGFyZ2V0Iiwic3JjIiwiZGF0YSIsIk1hdGgiLCJyYW5kb20iLCJhbHQiLCJpdGVtX2lkIiwibW9kYWwiLCJpbWciLCJmaW5kIiwiY2Fyb3VzZWxfaXRlbV9pZF9maWVsZCIsInByb3AiLCJlYWNoIiwic2hvd1VwZGF0ZUJ1dHRvbiIsInV0aWxzIiwiaW5pdEN1c3RvbUZpbGVFdmVudHMiLCJiaW5kIiwiYWxsb3dEcm9wIiwiZXYiLCJwcmV2ZW50RGVmYXVsdCIsImRyYWciLCJkYXRhVHJhbnNmZXIiLCJzZXREYXRhIiwidGFyZ2V0IiwiaWQiLCJkcm9wIiwiZ2V0RGF0YSIsImRyYWdnZWQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicGFyZW50Tm9kZSIsInRhZ05hbWUiLCJkcm9wem9uZSIsInBhcmVudCIsIm5leHRFbGVtZW50U2libGluZyIsImFwcGVuZCIsImluc2VydEJlZm9yZSIsInNhdmVDYXJvdXNlbEl0ZW1DaGFuZ2VzIiwiY3NyZl90b2tlbiIsInRhYmxlIiwib3JkZXIiLCJpdGVtcyIsImN1cnJlbnRfaWQiLCJ1cGRhdGVfdGl0bGUiLCJ2YWwiLCJpdGVtX2luZm8iLCJ0aXRsZSIsInB1c2giLCJwYXJhbWV0ZXJzIiwiX3Rva2VuIiwiSlNPTiIsInN0cmluZ2lmeSIsInBvc3QiLCJwYXJzZSIsInJlc3BvbnNlIiwiY2xpY2si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LEVBQUUsSUFBRixFQUFRTSxJQUFSLENBQWEsUUFBYixDQUFqQjtBQUNBLFFBQUl5QyxlQUFlL0MsRUFBRSxJQUFGLEVBQ2hCYSxJQURnQixDQUNYLFVBRFcsRUFFaEJtQyxHQUZnQixFQUFuQjtBQUdBLFFBQUlDLFlBQVksRUFBRXJCLElBQUlrQixVQUFOLEVBQWtCSSxPQUFPSCxZQUF6QixFQUF1Q0gsT0FBT0EsS0FBOUMsRUFBaEI7QUFDQUMsVUFBTU0sSUFBTixDQUFXRixTQUFYO0FBQ0FMO0FBQ0QsR0FSRDtBQVNBLE1BQUlRLGFBQWE7QUFDZkMsWUFBUVgsVUFETztBQUVmRyxXQUFPUyxLQUFLQyxTQUFMLENBQWVWLEtBQWY7QUFGUSxHQUFqQjtBQUlBN0MsSUFBRXdELElBQUYsQ0FBTyx1QkFBUCxFQUFnQ0osVUFBaEMsRUFBNEMsVUFBUzlDLElBQVQsRUFBZTtBQUN6REEsV0FBT2dELEtBQUtHLEtBQUwsQ0FBV25ELElBQVgsQ0FBUDtBQUNBLFFBQUlBLEtBQUtvRCxRQUFULEVBQW1CO0FBQ2pCakUsYUFBT00scUJBQVAsR0FBK0IsS0FBL0I7QUFDQUMsUUFBRSx3Q0FBRixFQUE0QzJELEtBQTVDO0FBQ0QsS0FIRCxNQUdPO0FBQ0xDLFlBQU0sb0ZBQU47QUFDRDtBQUNGLEdBUkQ7QUFTRCxDIiwiZmlsZSI6IlxcanNcXGFkbWluXFxjYXJvdXNlbHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSA3MSk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgYTYyYjFiNTZkYTlhMTY2YWM1NjgiLCJ0cnkge1xyXG4gIHdpbmRvdy5jYXJvdXNlbHMgPSByZXF1aXJlKFwiLi9zcmMvY2Fyb3VzZWxzLmpzXCIpO1xyXG59IGNhdGNoIChlKSB7XHJcbiAgY29uc29sZS5lcnJvcihlKTtcclxufVxyXG53aW5kb3cuY2Fyb3VzZWxfaXRlbV91cGRhdGVkID0gZmFsc2U7XHJcblxyXG4kKFwiI21kbF9jYXJvdXNlbEl0ZW1JbWFnZVwiKS5vbihcInNob3cuYnMubW9kYWxcIiwgZnVuY3Rpb24oZXZlbnQpIHtcclxuICB2YXIgYnV0dG9uID0gJChldmVudC5yZWxhdGVkVGFyZ2V0KTsgLy8gQnV0dG9uIHRoYXQgdHJpZ2dlcmVkIHRoZSBtb2RhbFxyXG4gIHZhciBzcmMgPSBidXR0b24uZGF0YShcInNyY1wiKSArIFwiP1wiICsgTWF0aC5yYW5kb20oKSAqIDEwMDAwMDAwOyAvLyBFeHRyYWN0IGluZm8gZnJvbSBkYXRhLSogYXR0cmlidXRlc1xyXG4gIHZhciBhbHQgPSBidXR0b24uZGF0YShcImFsdFwiKTsgLy8gRXh0cmFjdCBpbmZvIGZyb20gZGF0YS0qIGF0dHJpYnV0ZXNcclxuICB2YXIgaXRlbV9pZCA9IGJ1dHRvbi5kYXRhKFwiaXRlbUlkXCIpOyAvLyBFeHRyYWN0IGluZm8gZnJvbSBkYXRhLSogYXR0cmlidXRlc1xyXG4gIC8vIElmIG5lY2Vzc2FyeSwgeW91IGNvdWxkIGluaXRpYXRlIGFuIEFKQVggcmVxdWVzdCBoZXJlIChhbmQgdGhlbiBkbyB0aGUgdXBkYXRpbmcgaW4gYSBjYWxsYmFjaykuXHJcbiAgLy8gVXBkYXRlIHRoZSBtb2RhbCdzIGNvbnRlbnQuIFdlJ2xsIHVzZSBqUXVlcnkgaGVyZSwgYnV0IHlvdSBjb3VsZCB1c2UgYSBkYXRhIGJpbmRpbmcgbGlicmFyeSBvciBvdGhlciBtZXRob2RzIGluc3RlYWQuXHJcbiAgdmFyIG1vZGFsID0gJCh0aGlzKTtcclxuICB2YXIgaW1nID0gbW9kYWwuZmluZChcIi5tb2RhbC1ib2R5IGltZ1wiKTtcclxuICB2YXIgY2Fyb3VzZWxfaXRlbV9pZF9maWVsZCA9IG1vZGFsLmZpbmQoXCIjdXBkYXRlX2Nhcm91c2VsX2l0ZW1faWRcIik7XHJcbiAgaW1nLnByb3AoXCJzcmNcIiwgc3JjKTtcclxuICBpbWcucHJvcChcImFsdFwiLCBhbHQpO1xyXG4gIGNhcm91c2VsX2l0ZW1faWRfZmllbGQucHJvcChcInZhbHVlXCIsIGl0ZW1faWQpO1xyXG59KTtcclxuXHJcbiQoZnVuY3Rpb24oKSB7XHJcbiAgJChcIi5zYXZlLWl0ZW0tY2hhbmdlc1wiKS5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgJCh0aGlzKS5wcm9wKFwiZGlzYWJsZWRcIiwgdHJ1ZSk7XHJcbiAgfSk7XHJcblxyXG4gICQoXCIjY2Fyb3VzZWxfaXRlbXNfdGFibGUgdGV4dGFyZWFcIikub24oXCJpbnB1dFwiLCBmdW5jdGlvbigpIHtcclxuICAgIGNhcm91c2Vscy5zaG93VXBkYXRlQnV0dG9uKCk7XHJcbiAgfSk7XHJcblxyXG4gIHV0aWxzLmluaXRDdXN0b21GaWxlRXZlbnRzKCk7XHJcblxyXG4gICQod2luZG93KS5iaW5kKFwiYmVmb3JldW5sb2FkXCIsIGZ1bmN0aW9uKCkge1xyXG4gICAgaWYgKHdpbmRvdy5jYXJvdXNlbF9pdGVtX3VwZGF0ZWQpIHJldHVybiB0cnVlO1xyXG4gIH0pO1xyXG59KTtcclxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9hZG1pbi9jYXJvdXNlbHMuanMiLCJleHBvcnQgZnVuY3Rpb24gYWxsb3dEcm9wKGV2KSB7XHJcbiAgZXYucHJldmVudERlZmF1bHQoKTtcclxufVxyXG5cclxuZXhwb3J0IGZ1bmN0aW9uIGRyYWcoZXYpIHtcclxuICBldi5kYXRhVHJhbnNmZXIuc2V0RGF0YShcInRleHRcIiwgZXYudGFyZ2V0LmlkKTtcclxufVxyXG5cclxuZXhwb3J0IGZ1bmN0aW9uIGRyb3AoZXYpIHtcclxuICBldi5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gIHZhciBkYXRhID0gZXYuZGF0YVRyYW5zZmVyLmdldERhdGEoXCJ0ZXh0XCIpO1xyXG4gIHZhciBkcmFnZ2VkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZGF0YSk7XHJcbiAgd2hpbGUgKGRyYWdnZWQgJiYgZHJhZ2dlZC5wYXJlbnROb2RlICYmIGRyYWdnZWQudGFnTmFtZSAhPSBcIlRSXCIpIHtcclxuICAgIGRyYWdnZWQgPSBkcmFnZ2VkLnBhcmVudE5vZGU7XHJcbiAgfVxyXG5cclxuICB2YXIgZHJvcHpvbmUgPSBldi50YXJnZXQ7XHJcbiAgd2hpbGUgKGRyb3B6b25lICYmIGRyb3B6b25lLnBhcmVudE5vZGUgJiYgZHJvcHpvbmUudGFnTmFtZSAhPSBcIlRSXCIpIHtcclxuICAgIGRyb3B6b25lID0gZHJvcHpvbmUucGFyZW50Tm9kZTtcclxuICB9XHJcblxyXG4gIHZhciBwYXJlbnQgPSBkcmFnZ2VkLnBhcmVudE5vZGU7XHJcbiAgaWYgKCFkcm9wem9uZS5uZXh0RWxlbWVudFNpYmxpbmcpIHtcclxuICAgIHBhcmVudC5hcHBlbmQoZHJhZ2dlZCk7XHJcbiAgfSBlbHNlIGlmIChkcmFnZ2VkLm5leHRFbGVtZW50U2libGluZyA9PSBkcm9wem9uZSkge1xyXG4gICAgZHJvcHpvbmUgPSBkcm9wem9uZS5uZXh0RWxlbWVudFNpYmxpbmc7XHJcbiAgICBwYXJlbnQuaW5zZXJ0QmVmb3JlKGRyYWdnZWQsIGRyb3B6b25lKTtcclxuICB9IGVsc2Uge1xyXG4gICAgcGFyZW50Lmluc2VydEJlZm9yZShkcmFnZ2VkLCBkcm9wem9uZSk7XHJcbiAgfVxyXG4gIHNob3dVcGRhdGVCdXR0b24oKTtcclxufVxyXG5cclxuZXhwb3J0IGZ1bmN0aW9uIHNob3dVcGRhdGVCdXR0b24oKSB7XHJcbiAgaWYgKCF3aW5kb3cuY2Fyb3VzZWxfaXRlbV91cGRhdGVkKSB7XHJcbiAgICB3aW5kb3cuY2Fyb3VzZWxfaXRlbV91cGRhdGVkID0gdHJ1ZTtcclxuICAgICQoXCIuc2F2ZS1pdGVtLWNoYW5nZXNcIikuZWFjaChmdW5jdGlvbigpIHtcclxuICAgICAgJCh0aGlzKS5wcm9wKFwiZGlzYWJsZWRcIiwgZmFsc2UpO1xyXG4gICAgfSk7XHJcbiAgfVxyXG59XHJcblxyXG5leHBvcnQgZnVuY3Rpb24gc2F2ZUNhcm91c2VsSXRlbUNoYW5nZXMoY3NyZl90b2tlbikge1xyXG4gIHZhciB0YWJsZSA9ICQoXCIjY2Fyb3VzZWxfaXRlbXNfdGFibGVcIik7XHJcbiAgdmFyIG9yZGVyID0gMTtcclxuICB2YXIgaXRlbXMgPSBbXTtcclxuICB0YWJsZS5maW5kKFwiLmRhdGEtcm93XCIpLmVhY2goZnVuY3Rpb24oKSB7XHJcbiAgICB2YXIgY3VycmVudF9pZCA9ICQodGhpcykuZGF0YShcIml0ZW1JZFwiKTtcclxuICAgIHZhciB1cGRhdGVfdGl0bGUgPSAkKHRoaXMpXHJcbiAgICAgIC5maW5kKFwidGV4dGFyZWFcIilcclxuICAgICAgLnZhbCgpO1xyXG4gICAgdmFyIGl0ZW1faW5mbyA9IHsgaWQ6IGN1cnJlbnRfaWQsIHRpdGxlOiB1cGRhdGVfdGl0bGUsIG9yZGVyOiBvcmRlciB9O1xyXG4gICAgaXRlbXMucHVzaChpdGVtX2luZm8pO1xyXG4gICAgb3JkZXIrKztcclxuICB9KTtcclxuICB2YXIgcGFyYW1ldGVycyA9IHtcclxuICAgIF90b2tlbjogY3NyZl90b2tlbixcclxuICAgIGl0ZW1zOiBKU09OLnN0cmluZ2lmeShpdGVtcyksXHJcbiAgfTtcclxuICAkLnBvc3QoXCJ1cGRhdGUtY2Fyb3VzZWwtaXRlbXNcIiwgcGFyYW1ldGVycywgZnVuY3Rpb24oZGF0YSkge1xyXG4gICAgZGF0YSA9IEpTT04ucGFyc2UoZGF0YSk7XHJcbiAgICBpZiAoZGF0YS5yZXNwb25zZSkge1xyXG4gICAgICB3aW5kb3cuY2Fyb3VzZWxfaXRlbV91cGRhdGVkID0gZmFsc2U7XHJcbiAgICAgICQoXCIjY2Fyb3VzZWxfbG9va3VwIGJ1dHRvbltuYW1lPSdsb29rdXAnXVwiKS5jbGljaygpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgYWxlcnQoXCJGYWlsZWQgdG8gc2F2ZSBjaGFuZ2VzIHRvIGNhcm91c2VsIGl0ZW1zLiBQbGVhc2UgY29udGFjdCB0aGUgc3lzdGVtIGFkbWluaXN0cmF0b3IuXCIpO1xyXG4gICAgfVxyXG4gIH0pO1xyXG59XHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvanMvYWRtaW4vc3JjL2Nhcm91c2Vscy5qcyJdLCJzb3VyY2VSb290IjoiIn0=