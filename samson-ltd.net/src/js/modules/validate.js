
const validator = new JustValidate('.form', {});

validator
  .addField('#nameUser', [{ // можно использовать классы вместо ид
      rule: 'required',
      errorMessage: 'Enter your name',
    }
  ])
  .addField('#emailUser', [{ // можно использовать классы вместо ид
      rule: 'required',
      value: true,
      errorMessage: 'Enter your email',
    },
    {
      rule: 'email',
      errorMessage: 'Please enter your correct email',
    },
  ])
  .onSuccess((event) => { // Если форма проходит валидацию то происходит код ниже
    alert("Form send!");
  })