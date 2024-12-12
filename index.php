<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ghost Wire: Tokyo</title>
    <script>
        window.addEventListener("load", () => 
        {
            const loader = document.querySelector(".loader")
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () =>{
                document.body.removeChild(loader);
            })
            
        });

        
    </script>
      
</head>
<body>

    <div class="loader"> </div>

    <header> 
    <div class="navbar">
        <div class="logo"> <a href="#"> Ghost </a></div>
        <ul class="links">
            <li><a href="#home"> Ghost </a></li>
            <li><a href="#about"> All Genre </a></li>
            <li><a href="#extra"> In Game</a></li>  
            <li><a href="#contact"> Buy </a></li>
        </ul>
        <a href="#login register.html" class="action_btn"> Get Started </a>
        <div class="toggle_btn">
            <i class='bx bx-menu-alt-right'></i>
        </div>
    </div>

    <div class="dropdown_menu">
        <li><a href="#home"> Ghost </a></li>
            <li><a href="#about"> All Genre </a></li>
            <li><a href="#extra"> In Game </a></li>
            <li><a href="#contact"> Buy </a></li>
            <li> <a href="#" class="action_btn"> Get Started </a></li>
    </div>
</header>
 <script>
    const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon =document.querySelector('.toggle_btn i')
        const dropDownMenu =document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function (){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classLis.contains('open')

            toggleBtnIcon.classList= isOpen
            ? 'bx bx-x'
            : 'bx bx-menu-alt-right'
        }
 </script>
<section class="home" id="home">
    <div class="home-content">
        <h1> Welcome To Ghost Wire: Tokyo </h1>
        <p> do you want play a game   <span class="multiple-text"> </span> </p>
        <a href="register.php" class="btn"> Register Now! </a>
       
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"> All Genre in <span>Ghost Wire: Tokyo</span></h1>

    <div class="about-container">
        <div class="s-box">
            </i> <h2> Genre Horor </h2>
            <h3> Do you want to play horror games but don't feel horror? <br> Ghost Wire: Tokyo is perfect for you, <br> A game with a horror genre but not too tight and not too scary because we can easily defeat the ghost </h3>
        </div>

        <div class="s-box">
             <h2> Game Action </h2>
            <h3> GhostWire: Tokyo is one of the most exciting Action games, <br> because we can defeat ghosts with the mystical powers we have <br> And many very cool hand styles to scare his ghost. </h3>
            <p> 
        </div>

        <div class="s-box">
             <h2> Game Adventure </h2>
            <h3> GhostWire: Tokyo is also one of the adventure games <br> With a map whose calculations are quite wide and also graphs that spoil the eyes. <br> This game also feels very adventurous because we can walk in Tokyo with a slightly horror atmosphere.  <br> </h3>
            
        </div>
       
    </div>
</section>
   
<section class="extra" id="extra">
    <h1 class="heading"> What we will do<span>In Game</span> </h1>

    <div class="extra-container">
        <div class="extra-box">
            <img src="img/mission.jpg">
            <div class="extra-layer">
                <h4> We can do a mission </h4>
            </div>
        </div>

        <div class="extra-box">
            <img src="img/fight.jpg">
            <div class="extra-layer">
                <h4> we can kill the ghost  </h4>
            </div>
        </div>

        <div class="extra-box">
            <img src="img/sister.jpg">
            <div class="extra-layer">
                <h4> Save our sister </h4>
            </div>
        </div>

        <div class="extra-box">
            <img src="img/map.jpg">
            <div class="extra-layer">
                <h4> we can explore map</h4>
            </div>
        </div>

        

        <div class="extra-box">
            <img src="img/Tokyo.jpg">
            <div class="extra-layer">
                <h4> Nice graphics</h4>
            </div>
        </div>
    </div>
</section>



<section class="contact" id="contact">
    <h2 class="heading"> Buy GhostWire: Tokyo </h2>
    <div class="content">
        <div class="card">
            <div class="icon">
                <i class='bx bxl-steam' ></i>
            </div>
            <div class="info">
                <h3> buy in steam </h3>
                <p> <a href="https://store.steampowered.com/app/1475810/Ghostwire_Tokyo/">click here</a></p>
            </div>
        </div>

        

        
    </div>
</section>

<footer class="footer">
    <h2 class="footer-title"> Copyright &copy; GhostWire: Tokyo 2024</h2>
</footer>














<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    // typed js
const typed = new Typed('.multiple-text',{
    strings:[' Nice Graphics?',' Nice Battle?',' Ghost Hunter?',''],
    typeSpeed:35,
    backSpeed:35,
    backDelay:100,
    loop:true,

})
</script>
</body>
</html>