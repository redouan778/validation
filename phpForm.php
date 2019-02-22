 <html>
    <head>
       <style>
         table{
            margin-left: auto;
            margin-right: auto;
         }

        .error {color: #FF0000;}

        h2{
          margin-left: 41%;
        }

        table{
          background: lightgrey;
          padding: 2%;
        }
        
       </style>
    </head>

    <body>
       <?php
          // define variables and set to empty values
          $nameErr = $passwordErr = $phoneNumberErr = $cityErr = $adressErr = $zipcodeErr = $sportErr = $soccerPlayerErr = $carErr = "";
          $name = $password = $phoneNumber = $city = $adress = $zipcode = $sport = $soccerPlayer = $car =  "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {


             if (empty($_POST["name"])) {
                $nameErr = "Name is required";
             }else {
                $name = test_input($_POST["name"]);
             }

             if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
             }else {
                $password = test_input($_POST["password"]);
             }

             if (empty($_POST["phoneNumber"])) {
                $phoneNumberErr = "PhoneNumber is required";
             }else {
                $phoneNumber = test_input($_POST["phoneNumber"]);
             }

             if (empty($_POST["city"])) {
                $cityErr = "City is required";
             }else {
                $city = test_input($_POST["city"]);
             }

             if (empty($_POST["adress"])) {
                $adressErr = "Adress is required";
             }else {
                $adress = test_input($_POST["adress"]);
             }


             if (empty($_POST["zipcode"])) {
                $zipcodeErr = "ZipCode is required";
             }else {
                $zipcode = test_input($_POST["zipcode"]);
             }

             if (empty($_POST["sport"])) {
                $sportErr = "Favorite Sport is required";
             }else {
                $sportcode = test_input($_POST["sport"]);
             }

             if (empty($_POST["soccerPlayer"])) {
                $soccerPlayerErr = "Favorite soccerPlayer is required";
             }else {
                $soccerPlayer = test_input($_POST["soccerPlayer"]);
             }

             if (empty($_POST["car"])) {
                $carErr = "Favorite car is required";
             }else {
                $car = test_input($_POST["car"]);
             }
          }

          function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
          }
       ?>



       <form method = "post" action = "<?php
          echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <table>
            <h2>Absolute classes registration</h2>

             <tr class="tr">
                <td class="td">Name:</td>
                <td class="td"><input type = "text" name = "name">
                   <span class = "error"> <?php echo $nameErr;?></span>
                </td>
             </tr>

             <tr>
                <td class="td">Password: </td>
                <td class="td"><input type = "password" name = "password">
                   <span class = "error"> <?php echo $passwordErr;?></span>
                </td>
             </tr>

             <tr>
                <td class="td">Phone Number:</td>
                <td class="td"> <input type = "text" name = "phoneNumber">
                   <span class = "error"><?php echo $phoneNumberErr;?></span>
                </td>
             </tr>

             <tr>
                <td class="td">City:</td>
                <td class="td"> <input type = "text" name = "city">
                   <span class = "error"><?php echo $cityErr;?></span>
                </td>
             </tr>

             <tr>
                <td class="td">Address:</td>
                <td class="td"> <input type = "text" name = "adress">
                   <span class = "error"><?php echo $adressErr;?></span>
                </td>
             </tr>

              <tr>
                 <td class="td">Zip Code:</td>
                 <td class="td"> <input type = "number" name = "zipcode">
                    <span class = "error"><?php echo $zipcodeErr;?></span>
                 </td>
              </tr>

              <tr>
                 <td class="td">Favorite sport:</td>
                 <td class="td"> <input type = "text" name = "sport">
                    <span class = "error"><?php echo $sportErr;?></span>
                 </td>
              </tr>

              <tr>
                 <td class="td">Favorite soccerplayer:</td>
                 <td class="td"> <input type = "text" name = "soccerPlayer">
                    <span class = "error"><?php echo $soccerPlayerErr;?></span>
                 </td>
              </tr>

              <tr>
                 <td class="td">Favorite car:</td>
                 <td class="td"> <input type = "text" name = "car">
                    <span class = "error"><?php echo $carErr;?></span>
                 </td>
              </tr>

             <td>
                <input type = "submit" name = "submit" value = "Submit">
             </td>

          </table>
       </form>
       <!-- <?php
          echo "<h2>Your given values are as:</h2>";

          echo $name;
          echo "<br>";

          echo $password;
          echo "<br>";

          echo $phoneNumber;
          echo "<br>";

          echo $city;
          echo "<br>";

          echo $adress;
          echo "<br>";

          echo $zipcode;

       ?> -->
    </body>
 </html>
