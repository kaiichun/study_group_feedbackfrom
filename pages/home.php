<?php

    require 'parts/header.php';

?>
<div class="container my-5 mx-auto" style="max-width: 700px;">
    <h1 class="h1 mb-4 text-center">Customer Service Feedback Form</h1>
    <?php if ( isUserLoggedIn() ) { ?>
        <div class="card p-4">
        <?php require dirname(__DIR__) .  '/parts/message_error.php'; ?>
        <?php require dirname(__DIR__) .  '/parts/message_success.php'; ?>
        <?php require dirname(__DIR__) .  '/parts/questions.php'; ?>
    </div>
    <div class="mt-4 d-flex justify-content-center gap-3">
         <a href="/results" class="btn btn-inverse">View Results</a>    
            <a href="/logout" class='m-2  text-decoration-none'>Logout</a>
          <?php } else { ?> <div class="text-center mt-4">
            <h3>Please login with your existing account or sign up a new account to continue</h3>
              <div class="mt-4 d-flex justify-content-center gap-3">
                <a href="/login" class='m-2  ps-3 pe-3 btn btn btn-primary'>Login</a>
                <a href="/signup" class='m-2 ps-3 pe-3 btn btn-primary'>Sign Up</a>
              </div>
          <?php } ?>
      </div>
    </div>
          </div>
    

     

<?php

    require 'parts/footer.php';