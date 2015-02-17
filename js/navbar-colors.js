$(document).ready(function(){
        
    $('#home').mouseenter(
        function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(150,0,180,0.8)"});
        }
    );

    $('#about').mouseenter(
        function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(29,64,184,0.8)"});
        }
    );
    
    $('#portfolio').mouseenter(
        function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(0,195,195,0.8)"});
        });
    
    $('#resume').mouseenter(
            function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(250,95,0,0.8)"});
        }
    );
    
    $('#contact').mouseenter(
                function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(255,192,0,0.8)"});
        }
    );
    
    $('#blog').mouseenter(
                function() { $('.navbar, .navbar-collapse.in').css({"background-color":"rgba(182,199,2,0.8)"});
        }
    );
    
    $('#menu').mouseleave(
        function() {
          $('.navbar').css({"background-color":""});  
        }
    )
});

