<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
  <?php include('navbar_index.php'); ?>
<br/><br/><br/><br/>
       <center><form>
              <img src="default/img/1.png"/>
        <h1 style="font-size: 35px; color: white;">College of Arts and Sciences of Asia and the Pacific</h1>
        <h1 style="font-size: 80px; color: white;">ENROLLMENT SYSTEM</h1>
       </form></center>
         
    <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Please Login</h3>
        <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button data-placement="top" title="Click to Login" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
                                <script type="text/javascript">
                    $(document).ready(function(){
                      $('#login1').tooltip('show');
                      $('#login1').tooltip('hide');
                    });
                  </script>
  </form>
                  <script>
                        jQuery(document).ready(function(){
                        jQuery("#login_form").submit(function(e){
                            e.preventDefault();
                            var formData = jQuery(this).serialize();
                            $.ajax({
                              type: "POST",
                              url: "login.php",
                              data: formData,
                              success: function(html){
                               if (html == 'true_admin'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("Welcome to Delaroy Studios School System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
                              }else
                              if (html == 'true_user'){
                                $.jGrowl("Loading Please Wait......", { sticky: true });
                                $.jGrowl("Welcome to Delaroy Studios School System", { header: 'Access Granted' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'normal/dashboard.php'  }, delay);  
                              }else
                              {
                              $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                              }
                              }
                            });
                            return false;
                          });
                  });
                  </script>
                  <div class="s-background animated fadeIn">

  <!-- Gradient Effect
  ============================================= -->
  <div class="gradients">
        <div class="blue"></div>
  </div>
      <img class="slider" src="default/img/8.jpg">
    <img class="slider" src="default/img/11.jpg">
    <img class="slider" src="default/img/9.jpg">
    <img class="slider" src="default/img/5.jpg">
  <img class="slider" src="default/img/12.jpg">
</div>
<?php include('footer_index.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>