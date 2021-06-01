<html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- css -->
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: 'IBM Plex Sans';
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.33%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content height:100% for full page content */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 50px;
  height: 100%;
}



label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}

input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}

input[type=password],
input[type=text],
input[type=email],
input[type=tel]  {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}

input[type=submit] {
    padding:5px 5px; 
    font-size: 14px;
    border:1px solid;
    width:20ex;
    height:5ex;
    outline:none ;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px; 
    position: relative;
  top: 0px;
  left: 95px;
}
form { 
margin: 0 auto; 
width:250px;
}



#Register {background-color: #B0E0E6;}
#Doctor {background-color: #8FBC8F;}
#Receptionist {background-color: #fd8791}


</style>
</head>

<body>

        
<button class="tablink" onclick="openPage('Register', this,  '#4682B4')" id="defaultOpen">Register as Patient</button>
<button class="tablink" onclick="openPage('Doctor', this, '#2E8B57')">Login as Doctor</button>
<button class="tablink" onclick="openPage('Receptionist', this, '#800000')">Login as Receptionist</button>

    <div id="Register" class="tabcontent">
  <!--    <div id="container">  --> 
      <form method="post" action="func2.php">
                                    <div >
                                        
                                        <div >
                                            <div >
                                                <input type="text" placeholder="First Name *" name="fname" required/>
                                            </div>
                                            <div >
                                                <input type="text" placeholder="Last Name *" name="lname" required/>
                                            </div>
                                            <div >
                                                <input type="email" placeholder="Your Email *" name="email"  />
                                            </div>
                    
                                            
                                            <div>
                                                <div >
                                                    <label > 
                                                        <input type="radio" name="gender" value="Male" checked>
                                                        <span> Male </span> 
                                                    </label>
                                                    <label > 
                                                        <input type="radio" name="gender" value="Female">
                                                        <span> Female </span> 
                                                    </label>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    
                                        <div >
                                            
                                            <div >
                                                <input type="tel" minlength="10" maxlength="10" name="contact" placeholder="Your Phone *"  />
                                            </div>
                                            <div >
                                                <input type="password" placeholder="Password *" id="password" name="password" required/>
                                            </div>
                                            <div >
                                                <input type="password"  id="cpassword" placeholder="Confirm Password *" name="cpassword"   required/><span id='message'></span>
                                            </div>
                                            <input type="submit" name="patsub1" value="Register"/>
                                        </div>

                                    </div>
                                    <center> <a href="index1.php">Already have an account?</a></center>
                                </form>
    <!-- </div> -->
</div>

    <div id="Doctor" class="tabcontent">
<!--      <div id="container">   -->
      <form method="post" action="func1.php">
                                    <div>
                                        <div >
                                            <div>
                                                <input type="text"  placeholder="Username *" name="username3"  required/>
                                            </div>
                                        </div>
                                        <div >
                                            <div >
                                                <input type="password"  placeholder="Password *" name="password3" required/>
                                            </div>
                                            
                                            <input type="submit" name="docsub1" value="Login"/>
                                        </div>
                                    </div>
                                </form>
  <!--   </div> -->
</div>
    <div id="Receptionist" class="tabcontent">
<!--         <div id="container">   -->
     <form method="post" action="func3.php">
                                    <div >
                                        <div >
                                            <div >
                                                <input type="text" placeholder="Username *" name="username1"  required/>
                                            </div>
                                            


                                        </div>
                                        <div >
                                            <div >
                                                <input type="password" placeholder="Password *" name="password2" required/>
                                            </div>
                                            
                                            <input type="submit" name="adsub" value="Login"/>
                                        </div>
                                    </div>
                                </form>
   <!--  </div> -->
</div>
<!-- javascript -->
     <script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   

    </body>

   
    </html>

  