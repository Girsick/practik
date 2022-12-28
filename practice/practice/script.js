const btn = document.querySelector('.btn > span');
btn.addEventListener('click', window.onload = function() {
  btn.innerHTML =
    (btn.innerHTML === 'Показать всё') ? btn.innerHTML = 'Скрыть всё' : btn.innerHTML = 'Показать всё';
})