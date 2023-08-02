<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <bs-head><center><h1>POWERZONE<small>Admin</small></h1></center></bs-head>
    <?php
      include"dbcon.php"
    ?>
    <script type="text/javascript" src="js/vali.js"></script>
</head>
<body style="background-color:whitesmoke">
      <a class="navbar-brand" style="background-color:khaki" href="#members">Members</a>
      <a class="navbar-brand" style="background-color:khaki" href="#on_mem">Online Members</a>
      <a class="navbar-brand" style="background-color:khaki" href="#chit">Course Hit</a>

   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <section id="#members">
        <h3>MEMBERS FORM</h3>
          <div class="table-responsive">
            <div class="col-sm-10">
                <table class="table table-primary" style="border:black ;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Trainer</th>
                      <th>Slot</th>
                      <th>Training type</th>
                      <th>Current weight(kg)</th>
                      <th>Height(in cm)</th>
                      <th>Home Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Postal code</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Plan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      //check connection
                      if($con->connect_error){
                        die("Connection Failed !".$con->connect_error);
                      }

                      //read data from database
                      $sql = "SELECT * FROM regform";
                      $result = $con->query($sql);

                      if(!$result)
                      {
                        die("Invalid Query".$con->error);
                      }

                      while($row = $result->fetch_assoc())
                      {
                        echo"<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["gender"]."</td><td>".$row["trainer"]."</td><td>".$row["slot"]."</td><td>".$row["training_type"]."</td><td>".$row["current_weight"]."</td><td>".$row["height"]."</td><td>".$row["home_address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["code"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["plan"]."</td><tr>";
                      }
                    ?>
                  </tbody>
                </table>
            </div>
          </div>
        </section>
        <section id="#on_mem">
          <h3>ONLINE MEMBERS FORM</h3>
          <div class="table-responsive">
            <div class="col-sm-10">
                <table class="table table-primary" style="border:black ;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Current weight(kg)</th>
                      <th>Height(in cm)</th>
                      <th>Home Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Postal code</th>
                      <th>Email</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      //check connection
                      if($con->connect_error){
                        die("Connection Failed !".$con->connect_error);
                      }

                      //read data from database
                      $sql = "SELECT * FROM onlineform";
                      $result = $con->query($sql);

                      if(!$result)
                      {
                        die("Invalid Query".$con->error);
                      }

                      while($row = $result->fetch_assoc())
                      {
                        echo"<tr><td>".$row["on_id"]."</td><td>".$row["on_first_name"]."</td><td>".$row["on_last_name"]."</td><td>".$row["on_gender"]."</td><td>".$row["on_current_weight"]."</td><td>".$row["on_height"]."</td><td>".$row["on_home_address"]."</td><td>".$row["on_city"]."</td><td>".$row["on_state"]."</td><td>".$row["on_code"]."</td><td>".$row["on_email"]."</td><td>".$row["on_phone"]."</td><tr>";
                      }
                    ?>
                  </tbody>
                </table>
            </div>
          </div>
        </section>
        <section id="chit">
          <h3>COURSE HIT COUNT</h3>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>online</th>
                  <th>basic</th>
                  <th>standard</th>
                  <th>premium</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                  $sql = "SELECT * FROM click_count";
                  $result = $con->query($sql);
                  while($row = $result->fetch_assoc())
                      {
                        echo"<tr><td>".$row["online1"]."</td><td>".$row["basic1"]."</td><td>".$row["standard1"]."</td><td>".$row["premium1"]."</td></tr>";
                      }
                ?>
              </tbody>
            </table>
            
        </section>
    </div>
                 
    
    
</body>
</html>