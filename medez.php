<?php
    $name= $_POST['name'];
     $myemail= $_POST['myemail'];
      $pass= $_POST['mypassword'];
      $gender= $_POST['gender'];
      $date= $_POST['birthday'];
      $phone= $_POST['Number'];
      $status= $_POST['Active'] ?? $_POST['inActive'] ?? 'Not specified';
?>
<DOCTYPE!>
    <html>
        <head>
            <link rel="stylesheet" href="zedst.css">
        </head>
        <body>
            <div class="Wsaver">
            <h2 class="title" >Registered</h2>
            <div class="logged">
                <h1>
                    Welcome, 
                    <?= $name ?>
                </h1><hr>
            <p>
                Email:
                <?= $myemail ?>
            </p>
            <p>
                Password:
                <?= $pass ?>
            </p>
            <p>
                Gender:
                <?= $gender ?>
            </p>
            <p>
                Birthday:
                <?= $date ?>
            </p>
            <p>
                Phone Number:
                <?= $phone ?>
</p>
            <p>
                Status:
                <?= $status ?>
                 </div>
            </div>
        </body>
    </html>
