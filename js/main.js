(function(){
    var options = {
        strings: [
        "I am a <span class='typeChange'>writer,</span>^1000",
        "I am a <span class='typeChange'>designer,</span>^1000",
        "I am a <span class='typeChange'>developer,</span>^1000"
        ],
        startDelay: 2000,
        typeSpeed: 40,
        backSpeed: 40,
        loop:true,
        smartBackspace:true
        /*Add comma points and extra typed.js attributes here.
        Code is found at: https://github.com/mattboldt/typed.js/*/
      }
      
      var typed = new Typed(".moving", options);
      
})();