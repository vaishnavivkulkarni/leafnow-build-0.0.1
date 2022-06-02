<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaf Now</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1000px)" href="css/phone.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpg" alt="My Plant Store"/> 
        </div>
        <ul>
        <li class="items"><a href="#home">Home</a></li>
        <li class="items"><a href="#services">Services</a></li>
        <li class="items"><a href="#Contact">Contact Us</a></li>
        <li class="items"><a href="#">About US</a></li>
        </ul>
    </nav>
    <section id="Home">
        <h1 class="h-primary">Welcome to Leaf Now</h1>
        <p>The love of gardening is a seed once sown that never dies.</p>
        <p>Despite the gardener's best intentions, nature will improvise.</p>
<button class="btn">Order Now</button>
    </section>
<section id="services-container"> 
    <h1 class="h-primary center">Our Services</h1>
<div id="services">
    <div class="box">
        <img src="seed.jpg" alt="">
        <h2 class="h-secondary center">Seed Ordering</h2>
        <p class="center">Good seed in good soil gives good yield. <br>It is a link between two generations. </p>
             <p class="center">Seeds have been and still are the most important staple food of the world.</p>
        
    </div>
    
        <div class="box">
            <img src="plant2.jpg" alt="">
            <h2 class="h-secondary center">Herb Ordering</h2>
            <p class="center">Herbs are not only used to prepare dishes,but they are also source of medical benefits. </p>
           <p class="center"> Herbs are used to treat and prevent diseases such as heart diseases, cancer and diabetes.</p>
        </div>
        
            <div class="box">
                <img src="plant3.jpg" alt="">
                <h2 class="h-secondary center">Shrub Ordering</h2>
                <p class="center">In arid, arctic and other regions of extreme climatic conditions here trees donot thrive, shurbs often provide valuable forage for wild life and livestock and for fuel.</p> 
            </div>
</div>
</section>

<section id="Contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact box">
<form action="">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"
        placeholder="Enter your Name">
    </div>

    <div class="form-group">
        <label for="email" center>Email:</label>
        <input type="Email" name="name" id="email"
        placeholder="Enter your Email">
    </div>

    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="Phone" name="name" id="phone"
        placeholder="Enter your Phone Number">
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
</form>

    </div>
</section>
</div>
</div>
</section>

<footer>
    <div class="center">
        Copyright &copy; www.LeafNow.com. All rights reserved! 
    </div>
</footer>
<section id="Shopping cart">
    <h1 class="h-primary center">Shopping cart</h1>

<section>
    <div>
        <img src="Hibiscus.jpg"/>
        <p>Hibiscus is a genus of flowering plants in the mallow family, malvaceae.</p>
        <h5>$1</h5>
        <span></span>
        <button>Add-Cart</button>
    </div>
    <div>
        <img src="cactus.jpg"/>
        <p>cacti play an important role in <br>the desert ecology and are vital souce of food.</p>
        <h5>$3</h5>
        <span></span>
        <button>Add-Cart</button>
    </div>
    <div>
        <img src="Rose.jpg"/>
        <p>Rose soothes the heart and emotions so that one can move on and enjoy the moment.</p>
        <h5>$2</h5>
        <span></span>
        <button>Add-Cart</button>

    </div>
</section>
<div class="select">
</div>
<section  id="about">
    <h1 class="h-primary center">About Us</h1>
    <h3 class="heading center">Why Choose Us?</h3>
    <div class="row">
        <div class="image center">
            <img src="about.jpg">
        </div>


        <div class="content">
<h3>Best Plant Store in the Country</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima doloribus modi maiores. Eum totam ratione animi nesciunt, praesentium iste libero. Optio perspiciatis sit praesentium adipisci mollitia quo modi, ducimus sequi.</p>
<div class="icons-container">
    <i class="fas fa-shipping-fast">
        <span>free delivery</span> 
        <div class="icons">
    <i class="fas fa-dollar-sign"></i>
        <span>easy payments</span>   
        
    </i>
</div>
<div class="icons">
    <i class="fas fa-headset"></i>
        <span>24/7 services</span>
        </div>
    </div>
<a href="#" class="btn">learn more</a>


    






















</section>




</body>
</html>
    
<script type="text/javascript">
    var noti= document.queryselector('h1');
    var select= document.queryselector('.select');
    var button= document.getElementsByTagName('button');
    for(but of button)
    {
        but.addEventListener('click', (e)=>{
            var add=Number(noti.getAttribute("data-count")||0);
            noti.setAttribute('data-counter', add +  1) ;
            noti.classList.add('zero');


        })


    }
</script>
