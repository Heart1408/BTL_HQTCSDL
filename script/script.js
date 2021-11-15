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


let modal = document.querySelector(".popup");
let closeBtn = document.querySelector(".close-btn");

function closePopup(){
    modal.style.display = "none";
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

// -----------------------------------
function Validator2(options){
    var formElement = document.querySelector(options.form);
    var next1 = document.getElementById("next1");

    // if (formElement){
        next1.onclick = function(e){
        // function next1(){
            // e.preventDefault(); 
            var isFormValid = true;
            
            if (isFormValid) {
                if (typeof options.onSubmit === 'function'){
                    formElement.style.display="none";
                    document.getElementById("form3").style.display="block";
                    document.getElementsByClassName("btn2")[0].style.display="none";
                    document.getElementsByClassName("btn3")[0].style.display="block";
                    document.getElementsByClassName("step2")[0].classList.remove("step_form");
                    document.getElementsByClassName("step3")[0].classList.add("step_form");
                }
            } else {
                //submit.classList.remove("btn_disabled");
            }
        
    }
}
function Validator3(options){
    var formElement = document.querySelector(options.form);
    var next2 = document.getElementById("next2");

    // if (formElement){
        // next2.onclick = function(e){
    if (formElement){
        next2.onclick = function(e){
            //e.preventDefault(); 
            var isFormValid = false;
            var checkbox = document.getElementById("checkbox");
            if (checkbox.checked == true) {
                isFormValid = true;
            }
            if (isFormValid) {
                if (typeof options.onSubmit === 'function'){
                    let modal = document.querySelector(".popup");
                    modal.style.display = "block";
                }
            } else {
                //submit.classList.remove("btn_disabled");
            }
        }
    }
}
function Validator4(options){
    var formElement = document.querySelector(options.form);
    
        var next3 = document.getElementById("next3");

    // if (formElement){
        // next2.onclick = function(e){
    if (formElement){
        next3.onclick = function(e){
            //e.preventDefault(); 
            var isFormValid = true;
            
            if (isFormValid) {
                if (typeof options.onSubmit === 'function'){
                    formElement.style.display="none";
                    document.getElementsByClassName("btn3")[0].style.display="none";
                    document.getElementById("form3").style.display="none";
                    document.getElementById("form4").style.display="block";
                    document.getElementsByClassName("step3")[0].classList.remove("step_form");
                    document.getElementsByClassName("step4")[0].classList.add("step_form");
                }
            } else {
                //submit.classList.remove("btn_disabled");
            }
        }
    }
}

function Validator(options){

    function validate(inputElement, rule) {
        var errorMessage = rule.test(inputElement.value);
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        if (errorMessage) {
            errorElement.innerText = errorMessage;
        } else {
            errorElement.innerText = "";
        }
        return !errorMessage;
    }

    var formElement = document.querySelector(options.form);
    var next = document.getElementById("btn1_submit");

    if (formElement){
        next.onclick = function(e){
        // formElement.onsubmit = function (e) 
        // {
            //e.preventDefault(); 

            var isFormValid = true;

            options.rules.forEach( function(rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            
            if (isFormValid) {
                var submit = document.getElementById("btn1_submit");
                    submit.classList.remove("btn_disabled");
                    submit.classList.add("btn_submit");

                if (typeof options.onSubmit === 'function'){
                    // var enableInputs = formElement.querySelectorAll('[name]');
                    // var formValues = Array.from(enableInputs).reduce(function(values, input){
                    //     (values[input.name] = input.value);
                    //     return values;
                    // }, {});

                    // options.onSubmit({
                        
                    // })
                    formElement.style.display="none";
                    document.getElementById("form2").style.display="block";
                    document.getElementById("btn1").style.display="none";
                    document.getElementsByClassName("btn2")[0].style.display="block";
                    document.getElementsByClassName("step1")[0].classList.remove("step_form");
                    document.getElementsByClassName("step2")[0].classList.add("step_form");
                    
                }
            } else {
                // submit.classList.remove("btn_disabled");
            }
        }


        options.rules.forEach(function(rule){
            var inputElement = formElement.querySelector(rule.selector);
            
            if (inputElement) {
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                }

                inputElement.oninput = function() {
                    var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
                    errorElement.innerText = "";
                    // inputElement.parentElement.classList.remove("");
                }
            }
        })
    }

}
Validator.isRequired = function(selector){
    return {
        selector: selector,
        test: function(value) {
            return value.trim() ? undefined : 'Vui lòng nhập trường này';
        }
    };
}
Validator.isDate = function(selector){
    return {
        selector: selector,
        test: function(value) {
           
            if (!value.trim()){
                return 'Vui lòng nhập trường này'
            } else {
                var now = new Date();
                var now_year = now.getFullYear();
                var year = new Date (value);
                var your_year = year.getFullYear();
                if (now_year - your_year > 110 || now_year - your_year < 0) {
                    return 'Ngày tháng năm sinh không hợp lệ';
                } else if (now_year - your_year < 18){
                    return 'Bạn chưa đủ 18 tuổi';
                } else {
                    return undefined;
                }
            }
                
        }
    };
}
Validator.isEmail = function(selector){
    return {
        selector: selector,
        test: function(value) {
            var regex = /\S+@\S+\.\S+/;
             return regex.test(value) ? undefined : 'Email không hợp lệ';
        }
    };
}
Validator.isPhone = function (selector, min, max) {
    return {
        selector: selector,
        test: function (value) {
            if (!value.trim() ) {
                return 'Vui lòng nhập trường này';
            } 
            else if (value.length < min || value.length > max) {
                return 'Số điện thoại không hợp lệ';
            }
            else {
                return undefined;
            }
        }
    }
}
Validator.isCCCD = function (selector, min, max) {
    return {
        selector: selector,
        test: function (value) {
            if (!value.trim() ) {
                return 'Vui lòng nhập trường này';
            } 
            else if (value.length < min || value.length > max) {
                return 'Số CCCD/CMND/HC không hợp lệ';
            }
            else {
                return undefined;
            }
        }
    }
}
