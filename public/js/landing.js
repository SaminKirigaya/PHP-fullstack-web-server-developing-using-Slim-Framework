 let act1 = document.getElementById("act1");
 let act2 = document.getElementById("act2");
 let act3 = document.getElementById("act3");
 let act4 = document.getElementById("act4");
 let act5 = document.getElementById("act5");

    act1.addEventListener("click", function() {
    act1.classList.add("active");
    act2.classList.remove("active");
    act3.classList.remove("active");
    act4.classList.remove("active");
    act5.classList.remove("active");
    });

    act2.addEventListener("click", function() {
    act1.classList.remove("active");
    act2.classList.add("active");
    act3.classList.remove("active");
    act4.classList.remove("active");
    act5.classList.remove("active");
    });

    act3.addEventListener("click", function() {
        act1.classList.remove("active");
        act2.classList.remove("active");
        act3.classList.add("active");
        act4.classList.remove("active");
        act5.classList.remove("active");
      });


    act4.addEventListener("click", function() {
        act1.classList.remove("active");
        act2.classList.remove("active");
        act3.classList.remove("active");
        act4.classList.add("active");
        act5.classList.remove("active");
    });  

    act5.addEventListener("click", function() {
        act1.classList.remove("active");
        act2.classList.remove("active");
        act3.classList.remove("active");
        act4.classList.remove("active");
        act5.classList.add("active");
    });  