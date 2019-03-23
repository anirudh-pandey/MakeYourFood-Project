var sidebarFunctionality = document.querySelector("#sidebar");
var hamburgerIcon = document.querySelector(".icon");
hamburgerIcon.addEventListener("click", function() {
	sidebarFunctionality.classList.toggle("active");
})


var dropdownList = document.querySelectorAll(".dropdown");
for(var i=0; i<dropdownList.length; i++) {
	dropdownList[i].addEventListener("click", function() {
		// this.style.backgroundColor = "blue";
		this.classList.toggle("active");
		var dropContent = this.nextElementSibling;
		if(dropContent.style.display == "block") {
			dropContent.style.display = "none";
		} else {
			dropContent.style.display = "block";
		}
	});
}



