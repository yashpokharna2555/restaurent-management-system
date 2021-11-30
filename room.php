<?php
include('header.php');
include('dbcon.php');
$r = $_GET['room'];

?>
<style>
    .room-status{
        display: none;
    }
</style>

<div id="room-home">
     <figure>
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux2.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         
     </figure>
        

</div>

<div id="f1">
         <form action=" " method="get"> 
         <center><table >
             <tr>
                 
                 
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="sub" value="Check"  ></td>
             </tr>
             <tr>
                
                
                 <td width="20%" height="50px">
                    <center> <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                        

                     </select></center>
            </form>
           
                 </td>
             </tr>
         </table></center>
         <!---------------------------------  delux ac--------------------- -->
         <?php
               $qryy="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];
               $qry="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">A.C Delux Room</p>
                     <p class="sectionsubTag">Status :Available </p>
                     <p class="sectionsubTag">Price per room : 1100 Rs</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci" required>
                     <input type="date" name="co" required>
                     <input type="text" name="rt" value="delux ac" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Delux Ac Room</p>
               <p class="sectionsubTag">Status :not Available </p>
               <p class="sectionsubTag">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
             <!---------------------------------   ac--------------------- -->

<?php
               
               $qry="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">A.C Room</p>
                     <p class="sectionsubTag">Status :Available </p>
                     <p class="sectionsubTag">Price per room : 900 Rs</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci" required>
                     <input type="date" name="co" required>
                     <input type="text" name="rt" value="ac" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit">
                     </form>
                     <br>
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag"> Ac Room</p>
               <p class="sectionsubTag">Status :not Available </p>
               <p class="sectionsubTag">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
             <!---------------------------------  non ac--------------------- -->
             <?php
              
               $qry="SELECT * FROM `nonac` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                      <p class="sectionTag">Non Ac Room</p>
                      <p class="sectionsubTag">Status : Available </p>
                      <p class="sectionsubTag">Price Per room : 700 Rs</p>
                      <form action="r1.php" method="get">
                     <input type="date" name="ci" required>
                     <input type="date" name="co" required>
                     <input type="text" name="rt" value="non ac" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit">
                     </form>
                     <br>
                   </div>
                   <div class="thumbnail">
                       <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                   </div>
               </section>
                   <?php

               }
               else{
                ?>
                       <section id="rooms-right">
                   <div class="paras">
                      <p class="sectionTag">Non Ac Room</p>
                      <p class="sectionsubTag">Status :not Available </p>
                      <p class="sectionsubTag">Sorry :( Please come another day</p>
                   </div>
                   <!-- <div class="thumbnail">
                       <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                   </div> -->
               </section>
                <?php
               }
            ?>


     </div>

    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    



</body>
</html>