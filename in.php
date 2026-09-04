<!DOCTYPE html>
<html>
    <head>
        <title>Practice lang po</title>
        <link rel="stylesheet" href="zedst.css">
        <style></style>
    
    </head>
    <body>
        <div class="Wsaver">
            
            <div class="nav">
                <img src="dtpreceipt.png" alt="logo" width="50px" height="50px">
                <div class="navbuttons">
                    <a class="but" href="">Home</a>
                     <a class="but"href="">About</a>
                      <a class="but" href="">Contact</a>
                </div>
            </div>
        <div class="sudlanan">
            <h1>Registration</h1>
            <form action="medez.php" method="post">
                <label for="name">Name</label>
                <input class="inputU" 
                type="text" 
                 name="name" 
                 id="name " required>
                <label for="myemail">Email</label>

                <input class="inputE    " 
                type="email" 
                name="myemail" 
                id="myemail" required>

                <label for="mypassword">Password</label>
                <input class="inputP    " 
                type="password" 
                name="mypassword" 
                id="mypassword" required>

                <label for="myconfirmpassword">Confirm Password</label>
                <input class="inputCP    "
                type="password" 
                name="myconfirmpassword" 
                id="myconfirmpassword" required>

                <label for="Number">Phone Number</label>
                <input class="inputN"
                type="tel" 
                name="Number" 
                id="Number" required>
                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Bayut</option>
                </select>

                <label for="birthday">Birthday</label>
                <input type="date" name="birthday" id="birthday" required>
                <label for="Status">Status</label>

                    <label for="Status1">
                    <input type="radio" 
                    name ="Active" 
                    value="Active" >Active
                </label>  
                <label for="Status2">
                    <input type="radio" 
                    name ="inActive" 
                    value="inActive" >Inactive
                </label> 

                <div class="checkbox">
                 <input type="checkbox" name="check" id="check">
                      By checking this box you agree to the <span >
                <a class="under" href="terter.html">Terms and Agreement</a> </span>  </label> 
                </div>
                <button type="Submit" class="bt">SUBMIT    </button>
                 
             </form>
        </div>
        </div>
    </body>
</html>