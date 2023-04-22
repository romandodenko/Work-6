// Валидация

const validator = new JustValidate('.form', { // можно использовать классы вместо ид

  errorLabelStyle: { // Стили для ошибки
    color: '#F13F58',
  }

});

validator
  .addField('#name', [{ // можно использовать классы вместо ид
      rule: 'required',
      errorMessage: 'Введите ваше имя!',
    },
    {
      rule: 'minLength',
      value: 1,
      errorMessage: 'Минимальное количество букв - 1!',
    },
  ])
  .addField('#email', [{ // можно использовать классы вместо ид
      rule: 'required',
      errorMessage: 'Введите вашу почту!',
    },

    {
      rule: 'email',
      errorMessage: 'Почта введена не правильно!',
    },
  ])
  .onSuccess((event) => { // Если форма проходит валидацию то происходит код ниже
    const form = document.querySelector(".form"); // форма

    const requestUrl = "https://jsonplaceholder.typicode.com/users"; // Для проверки работает всё или нет, выступает в качестве сервера

    function sendRequest(method, url, body = null) {
      const headers = {
        'Content-Type': 'application/json',
      };

      return fetch(url, {
        method: method,
        body: JSON.stringify(body),
        headers: headers,
      }).then(response => {
        return response.json()
      })

    }

    const body = { // то что передается
      userName: form.querySelector(".name-input").value,
      userEmail: form.querySelector(".email-input").value,
      userCommentary: form.querySelector(".commentary").value,
    }

    sendRequest("POST", requestUrl, body)
      .then(data => console.log(data))
      .catch(err => console.log(err))

    document.body.style.overflow = "";

    document.querySelector(".wrapper-form").classList.add("change-el");

    form.querySelectorAll(".form__input").forEach(function (e) {
      e.value = "";
    });

    form.querySelector(".form__textarea").value = "";

  })