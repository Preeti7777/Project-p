<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Hotel Name - Deluxe Room</title>
    <style>
       /* div.container{
            text-align: center;
        }*/
        div.room-section{
          margin: 5px;
          border: 1px transparent;
          float: left;
          width: 800px;
          padding-left:75px ;
          padding-right: 55px;
        }

        /*div.room-section:hover {
          border: 1px solid #777;
        }*/

        div.room-section img {
          width: 100%;
          height: auto;
        }

        div.para {
          padding: 15px;
          text-align: center;
        }
        /*.room-section {
            padding: 20px;
            border: 3px solid black;
            border-radius: 5px;
            margin: 35px;
            width: 500px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            float: left;
        }
        .para{
            margin:50px;
            font-size: 25px;
            padding: 15px;
            text-align: center;
        }*/
        
    </style>
    <link rel="stylesheet" href="./css/header.css">
    <!-- <link rel="stylesheet" href="./css/footer.css"> -->
</head>

<body>
    <header>
        <nav>
            <h1>HOTEL SAROWAR <br>Rooms<h1>
            <a href="home.php">Home</a>
            <a href="facilities.php">Facilities</a>
            <a href="contact.php">Contact</a>
            <a href="gallery.php">Gallery</a>
            <a href="room.php">Room</a>
            <a href="book.php" class="book">Book Now</a>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="room-section">
                 <a target="_blank" href="./img/deluxe twin room.jpg">
                <img src="./img/deluxe twin room.jpg" alt="deluxroom" width="300" height="130" align="left">
                </a>
                <p class="para">
                    <h1>Deluxe Room</h1><br>
                    Deluxe rooms are usually larger than their standard counterparts, includes a bathtub and a shower in the bathroom, and more high-end amenities. It is extra fancy and is of high quality.
                </p>
                <a href="deluxeroom.php" target="_blank" class="r1">Learn More</a>
            </div>
            <div class="room-section">
                 <a target="_blank" href="./img/suite.jpg">
                <img src="./img/suite.jpg" alt="suite" width="300" height="130" align="left">
                </a> 
                <p class="para">  
                    <h1>Suite Room</h1><br>
                    Suite room is the largest room available in our hotel.Our suite room consists of two and more than two room according to the price.
                </p>
                <a href="suiteroom.php" target="_blank">Learn More</a> 
            </div>
            <div class="room-section">
                 <a target="_blank" href="./img/superior queen room 2.jpg">
                <img src="./img/superior queen room.jpg" alt="Superior queen room" width="300" height="130" align="left">
                 <!-- <img src="./img/superior queen room 2.jpg" alt="Superior queen room2" width="500" height="330"> -->
                </a>
                <p class="para">
                    <h1>Superior Queen Room</h1><br>
                    Superior Queen Room offers breathtaking views of the city skyline and comes with modern amenities for a comfortable stay. Experience luxury at its finest.
                </p>
                <a href="superiorqueenroom.php" target="_blank">Learn More</a>
            </div>
            <div class="room-section">
                 <a target="_blank" href="./img/smart twin room.jpg">
                <img src="./img/smart twin room.jpg" alt="smart twin room" width="300" height="130" align="left">
                </a>
                <p class="para">
                    <h1>Smart Twin Room</h1><br>
                    The Deluxe Room offers breathtaking views of the city skyline and comes with modern amenities for a
                    comfortable stay. Experience luxury at its finest.
                </p>
                <a href="smarttwinroom.php" target="_blank">Learn More</a>
            </div>
        </div>
    </section>

    <!-- <section>
    <footer>
    <p>&copy; 2023 Hotel Sarowar. All rights reserved.</p>
    </footer>
    </section> -->
</body>

</html>