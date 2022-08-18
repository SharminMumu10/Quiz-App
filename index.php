<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Quiz_App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <form action="index.php" method="post">
       
   <header id="main-header" class="container"> 
      <p>
         
         <b>Sharmin Akter Momu </b>
      </p>

   </header>
    
  
   <nav id="navbar" class="container">
      <ul>
          <li><a href="#Home">Home</a></li>
          <li><a href="#News">News</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#Contact">Contact</a></li>
      </ul>
   </nav>
 
 
     <section id="showcase" class="container">
       
            <h1> Web Technologies <br> Id: 18-36567-1 <br>  Section:L   </h1>
              
     </section>
   

   <div class="container">
      <aside id="main">

      <p> 1.Which of these country is not part of  NATO?
          <br> <input type= "radio" name="Q1" value="Ukraine"> Ukraine
          <br> <input type= "radio" name="Q1" value="Germany"> Germany
      </p> 

      <p>
      2. What is the longest river of the world?
      <br> <input type= "radio" name="Q2" value="Jamuna"> Jamuna
          <br> <input type= "radio" name="Q2" value="Nile"> Nile
      </p>

      <p>
      3. Who wrote Oliver twist?
      <br> <input type= "radio" name="Q3" value="Charles Dickens"> Charles Dickens
          <br> <input type= "radio" name="Q3" value="william shakespeare"> william shakespeare
      </p>

      <p>
      4. What is the capital of Newzealand?
      <br> <input type= "radio" name="Q4" value="Auckland"> Auckland

          <br> <input type= "radio" name="Q4" value="Wellington"> Wellington
      </p>

      <p>
      5. Who won the 2006 FIFA world cup?
      <br> <input type= "radio" name="Q5" value="France"> France

          <br> <input type= "radio" name="Q5" value="Italy"> Italy
      </p>

      <p>
      6. Who is Harry potter's best friend?
      <br> <input type= "radio" name="Q6" value="Ron"> Ron

          <br> <input type= "radio" name="Q6" value="Jessica"> Jessica

      </p>

      <p>
      7. FBI stands for what?
      <br> <input type= "radio" name="Q7" value="Federal Bureau of Investigation"> Federal Bureau of Investigation

          <br> <input type= "radio" name="Q7" value="Federal Bureau of International"> Federal Bureau of International

      </p>
         
      <p>
      8. Who wrote Bidrohi?
      <br> <input type= "radio" name="Q8" value="Rabindranath Tagore"> Rabindranath Tagore

          <br> <input type= "radio" name="Q8" value="Kazi Nazrul Islam"> Kazi Nazrul Islam

      </p>

      <p>
      9. Marie Curie won Noble in which field?
      <br> <input type= "radio" name="Q9" value="chemistry"> chemistry

          <br> <input type= "radio" name="Q9" value="physics"> physics

      </p>

      <p>
      10.Who among the following was the Last Governor of Bengal?
      <br> <input type= "radio" name="Q10" value="Lord Clive"> Lord Clive

          <br> <input type= "radio" name="Q10" value="Warren Hastings"> Warren Hastings

      </p>

      <br> <br>
      <input type="submit" name="submit">


      </aside>

     <?php
     $total=0;
     if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
         if($_POST ["submit"])
         {
             if (isset($_POST["Q1"]))
             {
                 if ($_POST["Q1"] == "Ukraine")
                 {
                     $GLOBALS['total'] = $GLOBALS['total'] + 1;
                 }
             }

             if (isset($_POST["Q2"])) 
             {
                if ($_POST["Q2"] == "Nile")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             }

             if (isset($_POST["Q3"])) 
             {
                if ($_POST["Q3"] == "Charles Dickens")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             }  

             if (isset($_POST["Q4"])) 
             {
                if ($_POST["Q4"] == "Wellington")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 

             if (isset($_POST["Q5"])) 
             {
                if ($_POST["Q5"] == "Italy")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 
             
             if (isset($_POST["Q6"])) 
             {
                if ($_POST["Q6"] == "Ron")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 
            
             if (isset($_POST["Q7"])) 
             {
                if ($_POST["Q7"] == "Federal Bureau of Investigation")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 
             if (isset($_POST["Q8"])) 
             {
                if ($_POST["Q8"] == "Kazi Nazrul Islam")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 
             if (isset($_POST["Q9"])) 
             {
                if ($_POST["Q9"] == "physics")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 

             if (isset($_POST["Q10"])) 
             {
                if ($_POST["Q10"] == "Warren Hastings")
                {
                    $GLOBALS['total'] = $GLOBALS['total'] + 1;
                }
             } 

         }

         echo "<aside id= 'sidebar'>
         <h1> ".$GLOBALS['total'] ." Marks Out of 10 </h1>
          </aside>";
     }
     ?>
     </form>

</div>

<br> <br> <br> <br><br>

     <footer class="container">
<p id="main-footer"> copyright &copy; 2017 My Website </p>

     </footer>
  

    
</body>
</html>