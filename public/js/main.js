const btnShow = document.querySelector("#btnShow");
const table = document.querySelector(".data-user");

const btnShowUpload = document.querySelector("#btnShowUpload");
const upload = document.querySelector(".show-form");


btnShow.addEventListener("click", function(){
  table.classList.toggle('show-table');
  
  if(table.classList.contains('show-table')){
    btnShow.textContent = "sembunyikan";
  }else{
    btnShow.textContent = "tampilkan data pengunjung";
  }
});

btnShowUpload.addEventListener("click", function(){
  upload.classList.toggle('show-upload');
  
  if(upload.classList.contains('show-upload')){
    btnShowUpload.textContent = "sembunyikan";
  }else{
    btnShowUpload.textContent = "tambah data";
  }
  });
