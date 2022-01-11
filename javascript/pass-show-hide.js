const psfw = document.querySelector(".form .field input[type='password']"),
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
	if (psfw.type === "password") {
		psfw.type = "text";
		toggleIcon.classList.add("active");
	} else {
		psfw.type = "password";
		toggleIcon.classList.remove("active");
	}
}
