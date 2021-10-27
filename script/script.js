
              
function next1(self){
    document.getElementById("form1").style.display="none";
    self.parentNode.parentNode.style.display="none";
    document.getElementById("form2").style.display="block";
    document.getElementsByClassName("btn2")[0].style.display="block";
    document.getElementsByClassName("step1")[0].classList.remove("step_form");
    document.getElementsByClassName("step2")[0].classList.add("step_form");
}

function next2(self){
    document.getElementById("form2").style.display="none";
    document.getElementById("form3").style.display="block";
    self.parentNode.parentNode.style.display="none";
    document.getElementsByClassName("btn3")[0].style.display="block";
    document.getElementsByClassName("step2")[0].classList.remove("step_form");
    document.getElementsByClassName("step3")[0].classList.add("step_form");
}
function cancel1(self){
    document.getElementById("form2").style.display="none";
    document.getElementById("form1").style.display="block";
    self.parentNode.parentNode.style.display="none";
    document.getElementsByClassName("btn1")[0].style.display="block";
    document.getElementsByClassName("step2")[0].classList.remove("step_form");
    document.getElementsByClassName("step1")[0].classList.add("step_form");
}
function cancel2(self){
    document.getElementById("form3").style.display="none";
    document.getElementById("form2").style.display="block";
    self.parentNode.parentNode.style.display="none";
    document.getElementsByClassName("btn2")[0].style.display="block";
    document.getElementsByClassName("step3")[0].classList.remove("step_form");
    document.getElementsByClassName("step2")[0].classList.add("step_form");
}


// let modalBtn = document.getElementById("popup-btn");
let modal = document.querySelector(".popup");
let closeBtn = document.querySelector(".close-btn");
// function next4(){
//     document.getElementById("form3").style.display="none";
//     document.getElementById("form4").style.display="block";
// }

function popup(){
    modal.style.display = "block";
}
function closePopup(){
    self.parentNode.parentNode.parentNode.style.display = "none";
}

window.onclick = function(e){
    if(e.target == modal){
    modal.style.display = "none"
    }
}

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;
	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})
