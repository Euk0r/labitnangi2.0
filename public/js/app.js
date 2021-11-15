/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/* When the user clicks on the button,                                                                                                                                                                                                                                                                 toggle between hiding and showing the dropdown content */
function showTab() {
  $("myDropdown").toggle("show");
} // Close the dropdown if the user clicks outside of it


window.onclick = function (e) {
  if (!e.target.matches('.dropbtn')) {
    $("myDropdown").removeClass("show");
  }
};

function currentDate() {
  var element = document.getElementById("DDay");
  var t = new Date();
  var now = new Date().getDate().toString() + " " + (new Date().getMonth() + 1).toString() + " " + new Date().getFullYear().toString();
  element.innerText = "Дата: " + now;
  setTimeout("currentDate()", 1000);
}

$(document).ready(function () {
  var thisHistory, globalHistory;
  var pathname = document.location.pathname;
  pathname = pathname.slice(pathname.lastIndexOf("/"), pathname.length);
  saveThisHistory(pathname);
  saveGlobalHistory(pathname);
  if (pathname === "/history") drawHistoryTable();
});

function saveThisHistory(pathname) {
  if (sessionStorage.getItem('thisHistory') === null) {
    thisHistory = {};
    sessionStorage.setItem('thisHistory', JSON.stringify(thisHistory));
  }

  thisHistory = JSON.parse(sessionStorage.getItem('thisHistory'));
  thisHistory[pathname] === undefined ? thisHistory[pathname] = 1 : thisHistory[pathname]++;
  sessionStorage.setItem('thisHistory', JSON.stringify(thisHistory));
}

function saveGlobalHistory(pathname) {
  if (localStorage.getItem('globalHistory') === null) {
    globalHistory = {};
    localStorage.setItem('globalHistory', JSON.stringify(globalHistory));
  }

  globalHistory = JSON.parse(localStorage.getItem('globalHistory'));
  globalHistory[pathname] === undefined ? globalHistory[pathname] = 1 : globalHistory[pathname]++;
  localStorage.setItem('globalHistory', JSON.stringify(globalHistory));
}

function drawHistoryTable() {
  $(".navbar a").each(function () {
    var link = $(this);
    var linkSrc = link.attr("href");
    $("#history_table").children()[0].insertAdjacentHTML("afterend", "<tr>\n      <td>".concat(link.text(), "</td>\n      <td>").concat(thisHistory[linkSrc] || "0", "</td>\n      <td>").concat(globalHistory[linkSrc] || "0", "</td>\n    </tr>\n    "));
  });
}

function attachScript(id, src) {
  var element = document.createElement("script");
  element.src = src;
  element.id = id;
  document.getElementsByTagName("head")[0].appendChild(element);
}

function sendXHRRequset(method, url) {
  var body = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
  return new Promise(function (resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.responseType = "text";

    xhr.onload = function () {
      if (xhr.status >= 400) {
        reject(xhr.response);
      } else resolve(xhr.response);
    };

    xhr.onerror = function () {
      reject(xhr.response);
    };

    xhr.send(body);
  });
}

function sendFetchRequest(method, url) {
  var body = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
  var headers = {};
  return fetch(url, {
    method: method,
    body: body,
    headers: headers
  }).then(function (response) {
    if (response.ok) {
      return response.json();
    }

    return response.json()["catch"](function (error) {
      var e = new Error("Что-то пошло не так");
      e.data = error;
      throw e;
    });
  });
}

function formattingFormData(_this) {
  var formData = new FormData(_this[0]);
  var error = [];
  var supportedFormatsImg = ["image/png", "image/jpg", "image/jpeg"];
  formData.forEach(function (item, i) {
    if (_typeof(item) === "object") {
      if (supportedFormatsImg.includes(item.type)) {
        formData.set(i.toString(), item.name);
      } else {
        error.push("Неверный формат файла");
      }
    }
  });

  if (error.length > 0) {
    swal({
      title: "Ошибка",
      text: error[0],
      icon: "error"
    });
    return false;
  } else return formData;
}

function showModal() {
  var modal = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : $(".modal");
  modal.addClass("active");
  $(".black-bg").addClass("active");
}

function hideModal() {
  $(".modal").removeClass("active");
  $(".black-bg").removeClass("active");
}

function checkLogin(loginIsBusy) {
  if (loginIsBusy) $(".notification__item.login-busy").css("display", "block");
  setTimeout(function () {
    $(".notification__item.login-busy").css("display", "none");
  }, 7000);
}

function errorAjax(result) {
  var errors = result["responseJSON"]["errors"];
  var keys = Object.keys(errors);
  var firstError = errors[keys[0]][0];
  swal({
    title: "Ошибка",
    text: firstError,
    icon: "error"
  });
}

function successAjax(res) {
  swal({
    title: res.title,
    text: res.text,
    icon: res.icon
  }).then(function () {
    if (res.icon !== "error") window.location.replace("");
  });
}

function sendAjax(_this, errorFoo, successFoo) {
  var formData = formattingFormData(_this);
  if (formData === false) return;
  $.ajax({
    type: _this.attr('method'),
    url: _this.attr('action'),
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    beforeSend: function beforeSend() {
      _this.find(".main-btn").prop("disabled", true);
    },
    statusCode: {
      422: errorFoo,
      200: successFoo
    },
    complete: function complete() {
      _this.find(".main-btn").prop("disabled", false);
    }
  });
}

$(document).ready(function () {
  $("#black_bg, .close").on("click", function () {
    $(".wrapper_album_img").toggleClass("active");
  });
  $(".admin-controller__btn").on("click", function () {
    $(".admin-controller__panel").toggleClass("active");
  });
  $(".add-button-modal").on("click", function () {
    showModal($(".add-button-modal-modal"));
  });
  $(".edit-button-modal").on("click", function () {
    var modalID = $(this).parents("tr").data("id");
    showModal($(".edit-button-modal-modal"));
    $(".button-modal-id").val(modalID);
  });
  $(".delete-button-modal").on("click", function () {
    var modalID = $(this).parents("tr").data("id");
    showModal($(".delete-button-modal-modal"));
    $(".button-modal-id").val(modalID);
  });
  $(".edit-button-modal-modal form, .delete-button-modal-modal form, .add-button-modal-modal form").on("submit", function (e) {
    e.preventDefault();
    sendAjax($(this), errorAjax, successAjax);
  });

  function attachScript(id, src) {
    var element = document.createElement("script");
    element.src = src;
    element.id = id;
    document.getElementsByTagName("head")[0].appendChild(element);
  }

  $(".register-form input[name='login']").on("blur", function (e) {
    attachScript("search-login", "/user/checkLogin?login=" + $(this).val());
  });
  $(".black-bg").on("click", hideModal);
});
$(document).ready(function () {
  if (document.location.pathname === "/edit") {
    var cords = ['scrollX', 'scrollY']; // сохраняем позицию скролла в localStorage

    window.addEventListener('unload', function (e) {
      return cords.forEach(function (cord) {
        return localStorage[cord] = window[cord];
      });
    }); // вешаем событие на загрузку (ресурсов) страницы

    window.addEventListener('load', function (e) {
      // если в localStorage имеются данные
      if (localStorage[cords[0]]) {
        var _window;

        // скроллим к сохраненным координатам
        (_window = window).scroll.apply(_window, _toConsumableArray(cords.map(function (cord) {
          return localStorage[cord];
        }))); // удаляем данные с localStorage


        cords.forEach(function (cord) {
          return localStorage.removeItem(cord);
        });
      }
    });
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;