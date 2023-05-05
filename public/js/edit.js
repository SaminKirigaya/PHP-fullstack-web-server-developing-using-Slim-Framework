let mail = "";
let fname = "";
let lname="";





let myDiv = document.querySelector('#fnam');
let fn = myDiv.querySelector('input');

let myDiv1 = document.querySelector('#lnam');
let ln = myDiv1.querySelector('input');

let myDiv2 = document.querySelector('#mal');
let em = myDiv2.querySelector('input');




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
        
        if (mail == "done" &&  lname=="done" && fname=="done"){
            console.log("inside css")
            btnclass.remove("disabled");
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
        
        if (mail == "done" &&  lname=="done" && fname=="done"){
            console.log("inside css")
            btnclass.remove("disabled");
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
        
        if (mail == "done" && lname=="done" && fname=="done"){
            console.log("inside css")
            btnclass.remove("disabled");
        }else{
            btnclass.add("disabled");
        }

        
        
        
    }else{
        em.classList.remove("is-valid");
        em.classList.add("is-invalid");
        btnclass.add("disabled");
    }


});

