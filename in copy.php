<!DOCTYPE html>
<html>
    <head>
        <title>Practice lang po</title>
        <link rel="stylesheet" href="zedst.css">
    
    </head>
    <body>
        <div class="sudlanan">
            <h1>Like idk</h1>
            <form action="medez.php" method="post">
                <label for="name">name</label>
                <input class="inputU" 
                type="text" 
                 name="name" 
                 id="name " required>
                <label for="myemail">Email</label>

                <input class="inputE    " 
                type="email" 
                name="myemail" 
                id="myemail" required>

                <label for="">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="other">other</option>
                    <option value="male">Male</option>       
                    <option value="female">Female</option> 
                    
                <label for="radio">
                <input type="radio"
                 name="radio" 
                 id="radio" 
                 required>
                 Active</label>
                 <label for="radio2">
                <input type="radio"
                 name="radio2" 
                 id="radio" 
                 required>
                 inActive</label>

                <label for="mypassword">Password</label>
                <input class="inputP    " 
                type="password" 
                name="mypassword" 
                id="mypassword" required>
                <label for="nums">Number</label>
                <input type="number" name="nums" id="nums"
                step="0.01"
                min="1" max="100"
                 required>
                
                <label for="check">
                 <input type="checkbox" name="check" id="check"> kindly check the box  </label> 
                <button type="Submit" class="bt">SUBMIT    </button>
                 
             </form>
        </div>
    </body>
</html>