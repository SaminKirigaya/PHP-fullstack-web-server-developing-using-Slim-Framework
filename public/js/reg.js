let mail = "";
let pass = "";
let conpass="";
let img = "";
let fname = "";
let lname="";





let myDiv = document.querySelector('#fnam');
let fn = myDiv.querySelector('input');

let myDiv1 = document.querySelector('#lnam');
let ln = myDiv1.querySelector('input');

let myDiv2 = document.querySelector('#mal');
let em = myDiv2.querySelector('input');

let myDiv3 = document.querySelector('#pss');
let ps = myDiv3.querySelector('input');

let myDiv4 = document.querySelector('#cpss');
let cps = myDiv4.querySelector('input');

let myDiv5 = document.querySelector('#pim');
let im = myDiv5.querySelector('input');


let mydiv6 = document.querySelector('#subbt');
let btn = mydiv6.querySelector('button');

let btnclass = btn.classList;


//main button show or off class

fn.addEventListener('input', ()=>{
    let regex = /^([a-zA-Z]+)$/;
    let fnm = fn.value;

    if (regex.test(fnm)){
        fname = "done";
        fn.classList.remove("is-invalid");
        fn.classList.add("is-valid");
        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");

        }
        
    }else{
        fn.classList.remove("is-valid");
        fn.classList.add("is-invalid");
        btnclass.add("disabled");
    }


});


ln.addEventListener('input', ()=>{
    let regex = /^([a-zA-Z]+)$/;
    let lnm = ln.value;
    

    if (regex.test(lnm)){
        lname = "done";
        ln.classList.remove("is-invalid");
        ln.classList.add("is-valid");
        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");

        }

        
    }else{
        ln.classList.remove("is-valid");
        ln.classList.add("is-invalid");
        btnclass.add("disabled");
    }


});


em.addEventListener('input', ()=>{
    let regex = /^([_\-\.0-9a-zA-Z]+)@([a-zA-Z\._]+)\.([a-zA-Z]+)$/;
    let mailval = em.value;

    if (regex.test(mailval)){
        mail = "done";
        em.classList.remove("is-invalid");
        em.classList.add("is-valid");
        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");

        }
        
    }else{
        em.classList.remove("is-valid");
        em.classList.add("is-invalid");
        btnclass.add("disabled");
    }


});

ps.addEventListener('input', ()=>{
    let regex = /^([_\-a-zA-Z0-9@]+){6,50}$/;
    let psv = ps.value;

    if (regex.test(psv)){
        pass = "done";
        ps.classList.remove("is-invalid");
        ps.classList.add("is-valid");

        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");

        }

        
    }else{
        ps.classList.remove("is-valid");
        ps.classList.add("is-invalid");
        btnclass.add("disabled");

    }


});

cps.addEventListener('input', ()=>{
    let regex = /^([_\-a-zA-Z0-9@]+){6,50}$/;
    let psv = cps.value;

    if (regex.test(psv)){
        conpass = "done";
        cps.classList.remove("is-invalid");
        cps.classList.add("is-valid");

        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");
        }


        
    }else{
        cps.classList.remove("is-valid");
        cps.classList.add("is-invalid");
        btnclass.add("disabled");

    }


});



im.addEventListener('input', ()=>{
    
    let mailval = im.value;
    let fileext = mailval.split('.');
    let len = fileext.length;
    if(fileext[len-1] == "jpg" || fileext[len-1] == "jpeg"){
        img = "done";
        im.classList.remove("is-invalid");
        im.classList.add("is-valid");
        if(ps.value == cps.value){
            if (mail == "done" && pass =="done" && img =="done" && conpass=="done" && lname=="done" && fname=="done"){
                console.log("inside css")
                btnclass.remove("disabled");
            }else{
                btnclass.add("disabled");
            }

        }else{
            btnclass.add("disabled");
        }




        

    }else{
        ps.classList.remove("is-valid");
        ps.classList.add("is-invalid");
        btnclass.add("disabled");

    }

    

});

