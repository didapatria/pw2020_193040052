const keyword = document.querySelector('.keyword');
const resep = document.querySelector('.resep');
const resepList = document.querySelector('.resep-list');
const dataMasakan = document.querySelector('.data-masakan');

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // fetch()
  fetch('ajax/ajax-cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (resep.innerHTML = response));
});
keyword.addEventListener('keyup', function () {
  // fetch()
  fetch('../ajax/ajax-cari-list.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (resepList.innerHTML = response));
});
keyword.addEventListener('keyup', function () {
  // fetch()
  fetch('../ajax/ajax-cari-data-masakan.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (dataMasakan.innerHTML = response));
});

//  Preview Image untuk Tambah dan Ubah
function previewImage() {
  const foto = document.querySelector('.foto');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}