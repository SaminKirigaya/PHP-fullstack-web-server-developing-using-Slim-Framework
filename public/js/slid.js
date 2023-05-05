



if (window.innerHeight>1365){

    window.addEventListener('scroll', function() {
        var element = document.querySelector('#animserv');
        var position = element.getBoundingClientRect().top;
        var position2 = element.getBoundingClientRect().bottom;
        var windowHeight = window.innerHeight;
        
    
        if (position > windowHeight * 0.5) {
        element.classList.add('slid');
        }
    
    
    
    });
    
    

}else{
    var element = document.querySelector('#animserv');
    element.classList.add('slid');
}

