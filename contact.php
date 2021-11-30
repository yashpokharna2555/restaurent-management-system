<?php
include('dbcon.php');
include('header.php');
?>
<div class="contact-container">
   
    <div class="contact1">
        <div class="contact-symbol">
           <i class="fas fa-hamburger">Hotel VENICE</i>
        </div>
        <div class="book-h1">
            <h1>BOOK YOUR <br> HOTEL TODAY</h1>
        </div>
        <div class="book-p">
            <p>Hotels.com Customer Care Number, Contact Address, Email Id. Hotels.com is an <br> Indian Most Popular Online Hotel Booking Platforms. Many Indian’s looking for the contact.</p>
        </div>
        
        <div class="location">
        <i class="fas fa-map-marker-alt"></i> <br>
            21 JACKSON BLVD 120 <br> LOS ANGELES
        </div>
        <div class="facebook">
           <i class="fab fa-facebook"></i>
           <i class="fab fa-instagram"></i>
           <i class="fab fa-twitter-square"></i>
           <i class="fab fa-youtube"></i>
        </div>
        <div class="website">
            <p>www.restaurentms.com</p>
        </div>
    </div>
    <div class="contact2">
        <div class="contact2-h1">
        <h1>Don't Hesitate <br> To Contact Us</h1>
        </div>
       
       <div class="contact-box">
       <form action="" method="post">
                <div class="form-group-con">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enyer Your name">
                </div>
                <div class="form-group-con">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enyer Your Email">
                </div>
                <div class="form-group-con">
                    <label for="name">Mobile:</label>
                    <input type="phone" name="phone" id="phone" placeholder="Enyer Your phone">
                </div>
                <div class="form-group-con">
                    <label for="name">Address:</label>
                    <input type="phone" name="address" id="phone" placeholder="Enyer Your Address">
                </div>
                <div class="form-group-con">
                    <label for="name">message:</label>
                  <textarea name="message" id="message" cols="20" rows="6"></textarea>
                </div>
                <div class="form-group-con">
                    <button class="con-btn" name="con-btn">Submit</button>
                </div>
            </form>
       </div>
    </div>
    
</div>
</body>
</html>