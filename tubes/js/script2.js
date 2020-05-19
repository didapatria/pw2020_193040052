const keyword2 = document.querySelector('.keyword2');
const resepLainnya = document.querySelector('.resep-lainnya');

// event ketika kita menuliskan keyword2
keyword2.addEventListener('keyup', function () {
  // fetch()
  fetch('ajax/ajax-cari-lainnya.php?keyword2=' + keyword2.value)
    .then((response) => response.text())
    .then((response) => (resepLainnya.innerHTML = response));
});