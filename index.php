<?php

  //start session here
  
  if (isset($_POST["submit"])){
    $choice = $_POST["choice"];

    //set the round number based upon the users choice
    if ($choice == "server"){
      $today = date("Y-m-d");   //get the server date in the correct format

      //query the db here for the round number based on the server date
    }
    else {
      $round = $_POST["roundNum"];
    }

      //set up a session variable here to identify the round
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NRL Assignment - Choose Round</title>
    <link rel="stylesheet" href="styles.css">

    <script>
      function changeSelectionList(){
      if (document.getElementById("roundForm").choice.value == "server")
        document.getElementById("roundNum").disabled = true;
      else
        document.getElementById("roundNum").disabled = false;
      }
    </script>

  </head>

  <body>

    <h1>NRL Ladder Assignment</h1>

    <form id="roundForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <p>Do you want to use the Server Date or User Input for the current round?</p>
        
      <p>
        <label for="Server">Server Date</label>
        <input type="radio" id="Server" name="choice" value="server" onclick="changeSelectionList();">
      </p>  
        
      <p>
        <label for="User">User Input</label>
        <input type="radio" id="User" name="choice" value="user" onclick="changeSelectionList();">
      </p>
  
      <p>
        <label for="roundNum">Round Number:</label>     
        <select id="roundNum" name="roundNum" size="1" disabled>
          <script>
             for (i = 1; i <= 26; i++)
               document.write('<option value="' + i + '">' + i + '</option>');
          </script>
        </select>
      </p>
      <p><input type="submit" name="submit" value="submit"></p>
    </form>

  </body>
</html>
