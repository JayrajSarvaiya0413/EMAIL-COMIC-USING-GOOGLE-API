<?php
global $headers;
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
global $msg;
$msg=array();


function fetchData(){
  $servername = 'bf1adw57uf1skqz6m6dk-mysql.services.clever-cloud.com:3306';
  $username = 'uvfmqmibbki1zaip';
  $password = 'p9JlNuAesTQtixenuEdR';
  $dbname = 'bf1adw57uf1skqz6m6dk';


  global $conn;

  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT emailid FROM email";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

      $temp1 = array();
      array_push($temp1, $row["emailid"]);
    }
  }
}

function connectToDatabase(){
  $test = array("
    <html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Wikipedia Caltrops</h1>
    <img src='https://imgs.xkcd.com/comics/wikipedia_caltrops.png ' /> 
    <h3>Oh no, they set up a roadblock which is just a sign with the entire 'Czech hedgehog' article printed on it</h3>
    <h4> <input type='submit' name='UNSUBSCRIBE'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Grownups</h1>
    <img src='https://imgs.xkcd.com/comics/grownups.png' /> 
    <h3>looked into this, and I can't figure out a way to do it cheaply. And I guess it I' wouldn't be sanitary.</h3>
    <h4> <input type='submit' name='UNSUBSCRIBE'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Sandwich</h1>
    <img src='https://imgs.xkcd.com/comics/sandwich.png' /> 
    <h3>Proper User Policy apparently means Simon Says.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Circuit Diagram</h1>
    <img src='https://imgs.xkcd.com/comics/circuit_diagram.png' /> 
    <h3>I just caught myself idly trying to work out what that resistor mass would actually be, and realized I had self-nerd-sniped.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Desert Island</h1>
    <img src='https://imgs.xkcd.com/comics/desert_island.png' /> 
    <h3>Telescopes and bathyscaphes and sonar probes of Scottish lakes, Tacoma Narrows bridge collapse explained with abstract phase-space maps, some x-ray slides, a music score, Minard's Napoleonic war: the most exciting new frontier is charting what's already here.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>HDTV</h1>
    <img src='https://imgs.xkcd.com/comics/hdtv.png' /> 
    <h3>We're also stuck with blurry, juddery, slow-panning 24fps movies forever because (thanks to 60fps home video) people associate high framerates with camcorders and cheap sitcoms, and thus think good framerates look 'fake'.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Eagle</h1>
    <img src='https://imgs.xkcd.com/comics/eagle.png' /> 
    <h3>In the off-seasons, I hire an animal trainer to help confront secret agents with situations which they are unable to report by radio.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Outbreak</h1>
    <img src='https://imgs.xkcd.com/comics/outbreak.png' /> 
    <h3>Let's get dinner after we promptly destroy all the X-7 we've manufactured.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Floor</h1>
    <img src='https://imgs.xkcd.com/comics/floor.png' /> 
    <h3>We once got grounded when we convinced the FAA to block flights through our county because of ash clouds.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>",
    "<html>
    <body>
    <form method='post' action='https://emailcomicjayraj.herokuapp.com/unsub.php'>
    <h1>Earth Temperature Timeline</h1>
    <img src='https://imgs.xkcd.com/comics/earth_temperature_timeline.png' /> 
    <h3>After setting your car on fire] Listen, your car's temperature has changed before.</h3>
    <h4> <input type='submit' name='button1'
    class='button' value='UNSUBSCRIBE' /></h4> 
    </form>
    </body>
    </html>");
$servername = 'bf1adw57uf1skqz6m6dk-mysql.services.clever-cloud.com:3306';
$username = 'uvfmqmibbki1zaip';
$password = 'p9JlNuAesTQtixenuEdR';
$dbname = 'bf1adw57uf1skqz6m6dk';


global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emailid FROM email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    global $temp;
    $temp = array();
    array_push($temp, $row["emailid"]);
    for ($i=0; $i < count($test); $i++) { 
      if ($i == count($test)) {
        $i = 0;
      }

      global $conn;
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT emailid FROM email";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          global $temp;
          $temp = array();
          array_push($temp, $row["emailid"]);
          for ($j=0; $j < count($temp); $j++) { 
            mail($temp[$j], "COMIC_EMAIL",$test[$i],"Content-type: text/html; charset=iso-8859-1\r\n");
          }
        }
      }
    }

  }

  sleep(300);
}


}
while (1) {
  connectToDatabase();
}
?>
