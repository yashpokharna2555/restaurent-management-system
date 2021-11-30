<?php
include('header.php');
include('dbcon.php');
session_start();

?>
<style>
    .food-nav{
        display: flex;
        width: 100%;
        margin-top: 30px;
        position: sticky;
        top:0px;
        background-color:crimson;
        border-radius:50px;
        
    }
    .food-nav ul{
        display: flex;
        padding: 10px;
        align-items: center;
        justify-content: center;
        margin-left: 50px;
    }
    .food-nav ul li{
        list-style: none;
        padding: 10px;
        text-align:center;
        margin-left: 70px;
    }
    .food-nav ul li:hover{
        background-color:white;
        color:white;
        border-radius:10px;
    }
    .food-nav ul li a{
        text-decoration: none;
        font-size:20px;
        text-align:center;
        color:black;
        font-weight:700;
    }
    .food-h{
        text-align:center;
    }
</style>
<nav class="food-nav">
    <ul>
        
        <li><a href="#south">South-Indian</a></li>
        <li><a href="#italian">Italian</a></li>
        <li><a href="#mah">Maharashtrian</a></li>
        <li><a href="#punjabi">Punjabi</a></li>
        <li><a href="#chinese">Chinese</a></li>
        <li><a href="#deserts">Deserts</a></li>
    </ul>
</nav>

<div class="container">
    <!-- ----------------------------------- South Indian-------------------------- -->
    <h1 class="food-h">South-Indian</h1>
    <div class="row" id="south">
    
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/dosa.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dosa</h5>
                    <p class="card-text">Price : Rs 100</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Dosa">
                   <input type="hidden" name="price" value="100">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/idli.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Idli Sambhar</h5>
                    <p class="card-text">Price : Rs 80</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Idli">
                   <input type="hidden" name="price" value="80">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/masakadosa.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Masala Dosa</h5>
                    <p class="card-text">Price : Rs 120</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Masala Dosa">
                   <input type="hidden" name="price" value="120">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>
       
      

    </div>
    <!-- ================================== Italian===================================== -->
    <h1 class="food-h">Italian</h1>
    <div class="row" id="italian">
       
        <div class="col-lg-3">
           
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/dosa.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dosa</h5>
                    <p class="card-text">Price : Rs 100</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Dosa">
                   <input type="hidden" name="price" value="100">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/manchu.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Manchurion</h5>
                    <p class="card-text">Price : Rs 110</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Manchurion">
                   <input type="hidden" name="price" value="110">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/mah.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">mah</h5>
                    <p class="card-text">Price : Rs 160</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="mah">
                   <input type="hidden" name="price" value="160">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/panner.png" alt="">
                <div class="card-body">
                    <h5 class="card-title">Paneer Butter Masala</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Paneer">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
            
        </div>
       
      
        
    </div>
    <!-- ------------------------------------Mah------------------------------------------- -->
    <h1 class="food-h">Maharashtrian</h1>
    <div class="row" id="mah">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/dosa.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Dosa</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Dosa">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/mah.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">mah</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="mah">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------punjabi------------------------------------ -->
   <h1 class="food-h">Punjabi</h1>
   <div class="row" id="punjabi">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/dosa.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Dosa</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Dosa">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/mah.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">mah</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="mah">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ------------------------------------------chinese-------------------------- -->
   <h1 class="food-h">Chinese</h1>
   <div class="row" id="chinese">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/paneerchilli.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Chili</h5>
                   <p class="card-text">Price : Rs 120</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer Chili">
                  <input type="hidden" name="price" value="120">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/mah.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">mah</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="mah">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------------deserts---------------------------------- -->
   <h1 class="food-h">Deserts</h1>
   <div class="row" id="deserts">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/dosa.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Dosa</h5>
                   <p class="card-text">Price : Rs 100</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Dosa">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price : Rs 110</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="110">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/mah.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">mah</h5>
                   <p class="card-text">Price : Rs 160</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="mah">
                  <input type="hidden" name="price" value="160">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/panner.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : Rs 150</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
</div>
</body>
</html>