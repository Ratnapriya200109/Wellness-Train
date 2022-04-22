<!DOCTYPE html>
<html>
    <head>
        <title>Faculty Request Form</title>
        <link rel="stylesheet" href="css/image-bar-style.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
   
    <style>
        *{
		margin: 0; 
		padding: 0;
		}
        .form{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 84.2vh;
        }
		.b
		{
            height: 100%;
            width: 100%;

            background-image: linear-gradient(360deg, #4eb6bcad, #68ffef40), url(images/hairoil.jpg);
            font-family: sans-serif;
            background-attachment: fixed;
            background-size: cover;
		}
        
        .form-wrap{ 
            width: 400px;
            height: 362px;
            background: #56c5b9cc;
            /* box-sizing: border-box; */
            box-shadow: 0px 0px 5px 2px #56f2ff;
            border-top: #15b1bc;
            padding: 15px 15px;
            /* transform: translate(-50%, -50%); */
        }
		  
        h3{
            text-align: center; 
            color: #000000; 
            font-weight: bold; 
		    font-family: loud;
            margin-bottom: 20px;
        }
        
        .wid{
          width: 128%; 
          background: none; 
          border: 1px solid #fff; 
          border-radius: 3px; 
          padding: 6px 15px; 
          box-sizing: border-box; 
          margin-bottom: 20px; 
          font-size: 12px;
		  font-weight: bold;
          color: #fff;
          }
        
        /* input[type="button"]
        { 
          background: #bac675; 
          border: 0; 
          cursor: pointer; 
		  border-style: solid;
          color: #3e3d3d;
          font-size: 12px;
          } */
        /* input[type="button"]:hover
        { 
          background: #a4b15c; 
          transition: .6s;
        } */
        label
		{
		font-size: 12px;
		font-weight: bold;
		}
        ::placeholder
        {
          color: #fff;
        }
		.res{
          
      width: 44%;
    margin-left: 9px;
    /* border: 2px solid white; */
    /* border: 6px solid #fff; */
    border-radius: 6px;
    border: 1px solid white;
    background-color: #4fa9a8;
    cursor: pointer;
    border-style: solid;
    color: #fafafa;
    font-size: 15px;
		}
	#res	#div{
      margin-left:20px;
    }
    #m{
      margin-left:20px;
    }
    
    </style>
    </head>

    <body class="b">
        
    <?php
        include('navbar.php');
    ?>
    <section>
        <div class="form">
            <div class="form-wrap">
            <form method="post">
                <table border="0" >
                    <h3> Query Form</h3>
                    <tr>
                        <td>
                            <label>User Name:</label>
                        </td>
                        <td>
                        <br>	<input type="text" name="yourname" placeholder="Enter your name here" class="wid"/><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>User Email Id:</label>
                        </td>
                        <td>
                            <br><input type="text" name="email" placeholder="Enter your email id here" class="wid"/><br>
                        </td>
                    </tr>
                    <tr>
                            <td>
                                <label>Write Your query:</label>
                            </td>
                            <td>
                                <br><textarea placeholder="Enter your query here" class="wid"></textarea><br>
                            </td>
                        </tr>
                    <tr>
                        <td>
                        </td>
                        
                        <td >
    
                        <br>	<input type="Submit" name="feedback" value="SUBMIT" class="res" />
                            <input type="Reset" value="Reset" class="res" />
                        </td>
                    </tr>
                </table>
            </form>
            </div>
    </div>  
    </section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <ul>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
             <ul>
                 <li><a href="otherS.php">Our Services</a></li>
             </ul>
         </div>
            <div class="footer-col">
                <ul>
                    <li><a href=#>FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    </body>
   
</html>