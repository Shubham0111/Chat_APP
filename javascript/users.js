const serachBar = document.querySelector(".users .search input"),
serachBtn = document.querySelector(".users .search button");

serachBtn.onclick = () =>{
	serachBar.classList.toggle("active");
	serachBar.focus();
	serachBtn.classList.toggle("active");
}