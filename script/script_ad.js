
// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener("click", function() {
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
function view_list(num)
{
    let cont = document.getElementsByClassName("view_op");
    let menu1 = document.querySelectorAll(".side-menu.top a");
    console.log(menu1);
    for (var i=0; i<cont.length; i++)
        {
            cont[i].style.display = "none";
            menu1[i].parentElement.classList.remove('active');
        }
    cont[num-1].style.display = "block";
    menu1[num-1].parentElement.classList.add('active');
    if (num == 2 || num == 3) {
        document.getElementById("show-tc").checked = true;
    }
}
    
function vaccine_des(des)
    {
        console.log(des);
        document.getElementById("vaccine_des").innerHTML = des;
    }