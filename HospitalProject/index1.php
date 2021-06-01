<!DOCTYPE html>
<html lang="en">
  <head>

<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<style>

html, body {   
 width: 100%;   
height: 100%;   
font-family: "Helvetica Neue", Helvetica, sans-serif;   
color: #444;   
-webkit-font-smoothing: antialiased;    background: #f0f0f0;
}

#container {
position: fixed;
width: 380;
height: 380;
top: 50%;
left: 50%;
margin-top: -140px;
margin-left: -170px;
background: #B0E0E6;
    border-radius: 2px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
}
background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
form {
    margin: 0 auto;
    margin-top: 20px;
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
input[type=password] {
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
  top: -43px;
  left: 0px;
}


</style>

  </head>
 
  <body>
  
            
<div id="container">  
 <center><h3 >Patient Login</h3><br>  </center>   
<form method="POST" action="func.php">
                <div >
                  <div ><label>Email-ID: </label></div>
                  <div ><input type="text" name="email" placeholder="enter email ID" required/></div><br><br>
                  <div ><label>Password: </label></div>
                  <div ><input type="password" name="password2" placeholder="enter password" required/></div><br><br><br>
                </div>
                 <div >
                    <center><input type="submit"  name="patsub" value="Login" ></center></div>  
              </form>
</div>

  

   
  </body>
</html>