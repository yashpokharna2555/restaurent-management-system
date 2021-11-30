<?php
include('header.php');
include('dbcon.php');
?>

<section id="feedback">

</section>

<section id="feedback-form">
    <form action="feedback.php" method="post">
       <input type="text" name="name" placeholder="Enter Name">
       <input type="text" name="feedback" placeholder="Enter Feedback">
       <input type="submit" name="submit">
    </form>
    <?php
       if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $feedback=$_POST['feedback'];

           $qry="INSERT INTO `feedback`(`id`, `name`, `feedback`) VALUES ('','$name','$feedback')";
           $run=mysqli_query($sql,$qry);
           if($run==true)
           {
               ?>
               <script>
                   alert("Feedback Save Perfectly");
               </script>
               <?php
           }
       }
    ?>
</section>

<?php
include('headfooter.php');
?>

</body>
</html>