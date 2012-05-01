var current = 0;
var number_of_slides = 5;

var images = new Array(number_of_slides);
var abouts = new Array(number_of_slides);

images[0] = '<img id="slide_image" src="imgs\\banzai2.bmp"/>';
images[1] = '<img id="slide_image" src="imgs\\print_screen.bmp"/>';
images[2] = '<img id="slide_image" src="imgs\\papageno_wide.bmp"/>';
images[3] = '<img id="slide_image" src="imgs\\slim_wide.bmp"/>';
images[4] = '<img id="slide_image" src="imgs\\simply2d_wide.bmp""/>';


abouts[0] = '<h3>Banzai</h3>Banzai is a chess game with support for playing online. It follows the standard rules of chess and makes sure that you can`t do any invalid moves.<br>You can also chat with your opponent as you play and send him applauds if you think he did a good move.<br><br><a href="projects.php" class="read_more">» Read more</a>';
abouts[1] = '<h3>Out of Hairspray!</h3>' +
            'Image from OutOfHairspray! A fun mini game where you have to run from your enemies without getting hit.' +
            'The game is about Dr.B, an evil genius that cares only about girls. Your goal is to collect as many as you can' +
            'while avoiding the guys.<br><br>' + 
            'Collect has many hairsprays as you can. When your awesomeness meter is full use your special ability to get lots of ladies.<br><br><a href="projects.php" class="read_more">» Read more</a>';
abouts[2] = '<h3>Papageno Sandbox</h3>A 2D sandbox game with simulated physical objects. <br><br>There`s two modes, paused and dynamic. In the paused mode no objects gets simulated and you can move them around without any gravity, you can also scale objects in this mode. In the dynamic mode objects collide with each other and gets affected by gravity, applying a rubberband force to a object is also only possible in this mode.<br><br><a href="projects.php" class="read_more">» Read more</a>';        
abouts[3] = '<h3>SlimChat</h3>A simple chat program running in the console. It has a server-client interface and supports up to 10 users on a server. Admins have special commands including kicking and banning. <br><br><a href="projects.php" class="read_more">» Read more</a>';
abouts[4] = '<h3>Simply2D</h3>Simply2D is a 2D scrolling platform game where the goal is to complete the levels as fast as possible without dying. There`s currently five maps in the campaign with varying difficulty. The level editor follows with the game and users are free to build and play their own maps.<br><br><a href="projects.php" class="read_more">» Read more</a>';

$(document).ready(function() {     
    // Run the slide show
    slideShow();
});
 
function slideShow() {
    // Change slide every 6th second
    setInterval('gallery()', 5000);
}
 
// Gets called when the animation is done
function swapSlide() {
    // Update the current slide to be the next one
    document.getElementById("current_slide_about").innerHTML = document.getElementById("next_slide_about").innerHTML;
    document.getElementById("current_slide_image").innerHTML = document.getElementById("next_slide_image").innerHTML;
    
    // Get the next slide from the array
    document.getElementById("next_slide_about").innerHTML = abouts[current];
    document.getElementById("next_slide_image").innerHTML = images[current];
    
   // Return to first slide if the end was passed
   if(current < number_of_slides - 1)
        current++;
    else
        current = 0;
 
    // Necessary for some reason, don't understand why
    $('#current_slide_about').css({opacity: 1.0});
    $('#current_slide_image').css({opacity: 1.0});
}

function gallery() {
    // Both about texts opacity sets to 0
    $('#current_slide_about').css({opacity: 0.0});
    $('#next_slide_about').css({opacity: 0.0});
    
    // Animate the next about text
    $('#next_slide_about').animate({opacity: 1.0}, 1500);
    
    // Animate the current image to 0.0 opacity and the next to 1.0 opacity
    $('#current_slide_image').animate({opacity: 0.0}, 1500);
    $('#next_slide_image').animate({opacity: 1.0}, 1540, swapSlide);
}