/* When the user clicks on the button,                                                                                                                                                                                                                                                                 toggle between hiding and showing the dropdown content */
function showTab() {
    $("myDropdown").toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches('.dropbtn')) {
        $("myDropdown").removeClass("show");
    }
}

function currentDate() {
    var element = document.getElementById("DDay");
    var t = new Date();
    var now = new Date().getDate().toString() + " " + (new Date().getMonth() + 1).toString() + " " + new Date().getFullYear().toString();
    element.innerText = "Дата: " + now;
    setTimeout("currentDate()", 1000);
}

$(document).ready(function () {
    let thisHistory, globalHistory;

    let pathname = document.location.pathname;
    pathname = pathname.slice(pathname.lastIndexOf("/"), pathname.length);

    saveThisHistory(pathname);
    saveGlobalHistory(pathname);
    if (pathname === "/history") drawHistoryTable();
})

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
        let link = $(this);
        let linkSrc = link.attr("href");
        $("#history_table").children()[0].insertAdjacentHTML("afterend",
            `<tr>
      <td>${link.text()}</td>
      <td>${thisHistory[linkSrc] || "0"}</td>
      <td>${globalHistory[linkSrc] || "0"}</td>
    </tr>
    `);
    });
}

function attachScript(id, src) {
    let element = document.createElement("script")
    element.src = src
    element.id = id
    document.getElementsByTagName("head")[0].appendChild(element)
}

function sendXHRRequset(method, url, body = null) {
    return new Promise((resolve, reject) => {
        let xhr = new XMLHttpRequest()

        xhr.open(method, url)
        xhr.responseType = "text"

        xhr.onload = () => {
            if (xhr.status >= 400) {
                reject(xhr.response)
            } else resolve(xhr.response)
        }

        xhr.onerror = () => {
            reject(xhr.response)
        }

        xhr.send(body)
    })
}

function sendFetchRequest(method, url, body = null) {
    const headers = {}

    return fetch(url, {
        method: method,
        body: body,
        headers: headers
    }).then((response) => {
        if (response.ok) {
            return response.json()
        }

        return response.json().catch((error) => {
            const e = new Error("Что-то пошло не так")
            e.data = error
            throw e
        })
    })
}

function formattingFormData(_this) {
    let formData = new FormData(_this[0]);
    let error = [];
    let supportedFormatsImg = ["image/png", "image/jpg", "image/jpeg"];

    formData.forEach((item, i) => {
        if (typeof item === "object") {
            if (supportedFormatsImg.includes(item.type)) {
                formData.set(i.toString(), item.name);
            } else {
                error.push("Неверный формат файла");
            }
        }
    })

    if (error.length > 0) {
        swal({
            title: "Ошибка",
            text: error[0],
            icon: "error",
        });
        return false;
    } else return formData;
}

function showModal(modal = $(".modal")) {
    modal.addClass("active")
    $(".black-bg").addClass("active")
}

function hideModal() {
    $(".modal").removeClass("active")
    $(".black-bg").removeClass("active")
}

function checkLogin(loginIsBusy) {
    if (loginIsBusy)
        $(".notification__item.login-busy").css("display", "block")

    setTimeout(() => {
        $(".notification__item.login-busy").css("display", "none")
    }, 7000)
}

function errorAjax(result) {
    let errors = result["responseJSON"]["errors"];
    let keys = Object.keys(errors);
    let firstError = errors[keys[0]][0];
    swal({
        title: "Ошибка",
        text: firstError,
        icon: "error",
    });
}

function successAjax(res) {
    swal({
        title: res.title,
        text: res.text,
        icon: res.icon,
    }).then(() => {
        if (res.icon !== "error") window.location.replace("");
    });
}

function sendAjax(_this, errorFoo, successFoo) {
    let formData = formattingFormData(_this);
    if (formData === false) return;

    $.ajax({
        type: _this.attr('method'),
        url: _this.attr('action'),
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {
            _this.find(".main-btn").prop("disabled", true);
        },
        statusCode: {
            422: errorFoo,
            200: successFoo
        },
        complete: function () {
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
    })

    $(".add-button-modal").on("click", function () {
        showModal($(".add-button-modal-modal"))
    })

    $(".edit-button-modal").on("click", function () {
        let modalID = $(this).parents("tr").data("id")

        showModal($(".edit-button-modal-modal"))
        $(".button-modal-id").val(modalID)
    })

    $(".delete-button-modal").on("click", function () {
        let modalID = $(this).parents("tr").data("id")

        showModal($(".delete-button-modal-modal"))
        $(".button-modal-id").val(modalID)
    })

    $(".edit-button-modal-modal form, .delete-button-modal-modal form, .add-button-modal-modal form").on("submit", function (e) {
        e.preventDefault()
        sendAjax($(this), errorAjax, successAjax);
    })

    function attachScript(id, src) {
        var element = document.createElement("script")
        element.src = src
        element.id = id
        document.getElementsByTagName("head")[0].appendChild(element)
    }

    $(".register-form input[name='login']").on("blur", function (e) {
        attachScript("search-login", "/user/checkLogin?login=" + $(this).val())
    });

    $(".black-bg").on("click", hideModal)
})

$(document).ready(function () {
    if (document.location.pathname === "/edit") {
        let cords = ['scrollX', 'scrollY'];
// сохраняем позицию скролла в localStorage
        window.addEventListener('unload', e => cords.forEach(cord => localStorage[cord] = window[cord]));
// вешаем событие на загрузку (ресурсов) страницы
        window.addEventListener('load', e => {
            // если в localStorage имеются данные
            if (localStorage[cords[0]]) {
                // скроллим к сохраненным координатам
                window.scroll(...cords.map(cord => localStorage[cord]));
                // удаляем данные с localStorage
                cords.forEach(cord => localStorage.removeItem(cord));
            }
        });
    }
});
