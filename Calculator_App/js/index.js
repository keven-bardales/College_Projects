var reset = document.getElementById('reset');
var equal = document.getElementById('equal');
var del = document.getElementById('del');
var numbers = document.getElementsByTagName('button');
var previous_number = document.getElementById('previous_number');
var current_number = document.getElementById('current_number');
var expression = '';

for (var i = 0; i < numbers.length; i++) {
  numbers[i].addEventListener('click', function () {
    if (
      this.innerHTML != 'RESET' &&
      this.innerHTML != '=' &&
      this.innerHTML != 'DEL'
    ) {
      expression += this.innerHTML;
      console.log(expression);
    }

    if (
      this.innerHTML != '+' &&
      this.innerHTML != '-' &&
      this.innerHTML != '*' &&
      this.innerHTML != '/' &&
      this.innerHTML != 'RESET' &&
      this.innerHTML != 'DEL' &&
      this.innerHTML != '='
    ) {
      presses_button(this.innerHTML);
    }
    if (
      this.innerHTML == '+' ||
      this.innerHTML == '-' ||
      this.innerHTML == '*' ||
      this.innerHTML == '/'
    ) {
      previous_number.innerHTML = current_number.innerHTML;
      current_number.innerHTML = '';
    }
  });
}

function presses_button(text) {
  if (current_number.innerHTML == '0') {
    current_number.innerHTML = '';
  }
  current_number.innerHTML += text;
}

del.addEventListener('click', function () {
  delet();
});

function delet() {
  current_number.innerHTML = current_number.innerHTML.slice(0, -1);
  expression = expression.slice(0, -1);
}

reset.addEventListener('click', function () {
  current_number.innerHTML = '0';
  document.getElementById('previous_number').innerHTML = '';
  expression = '';
});

equal.addEventListener('click', function () {
  previous_number.innerHTML = current_number.innerHTML;
  current_number.innerHTML = eval(expression);
  if (parseFloat(current_number.innerHTML) % 1 !== 0) {
    current_number.innerHTML = parseFloat(current_number.innerHTML).toFixed(2);
  }
  previous_number.innerHTML = '';
  expression = '';
  expression += current_number.innerHTML;
});

function setTheme(theme) {
  if (theme === 'theme1') {
    document.documentElement.style.setProperty('--primary-color', '#3a4764');
    document.documentElement.style.setProperty('--secondary-color', '#637097');
    document.documentElement.style.setProperty('--tertiary-color', '#d03f2f');
    document.documentElement.style.setProperty('--bg-color', '#232c43');
    document.documentElement.style.setProperty('--user_bg', '#182034');
    document.documentElement.style.setProperty('--del_bg', '#637097');
    document.documentElement.style.setProperty('--fontcolor1', 'white');
  } else if (theme === 'theme2') {
    document.documentElement.style.setProperty('--primary-color', '#264653');
    document.documentElement.style.setProperty('--secondary-color', '#2a9d8f');
    document.documentElement.style.setProperty('--tertiary-color', '#e9c46a');
    document.documentElement.style.setProperty('--bg-color', '#f4a261');
    document.documentElement.style.setProperty('--user_bg', '#e76f51');
    document.documentElement.style.setProperty('--del_bg', '#2a9d8f');
    document.documentElement.style.setProperty('--fontcolor1', 'black');
  } else if (theme === 'theme3') {
    document.documentElement.style.setProperty('--primary-color', '#d45d79');
    document.documentElement.style.setProperty('--secondary-color', '#f4a261');
    document.documentElement.style.setProperty('--tertiary-color', '#e9c46a');
    document.documentElement.style.setProperty('--bg-color', '#264653');
    document.documentElement.style.setProperty('--user_bg', '#2a9d8f');
    document.documentElement.style.setProperty('--del_bg', '#f4a261');
    document.documentElement.style.setProperty('--fontcolor1', 'white');
  }
}

const themes = document.querySelectorAll('input[type="radio"]');
themes.forEach((theme) => {
  theme.addEventListener('change', (event) => {
    setTheme(event.target.id);
  });
});
