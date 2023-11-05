<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Hotel Name - Facilities</title>
    <style>
        .facilities-section {
            padding: 20px;
            border: 1px solid black;
            margin: 10px ;
        }

        .facilities-section h2 {
            font-size: 50px;
            color: #333;
        }

        .facilities-section p {
            color: #666;
            font-size: 40px;
        }

        .facilities-list {
            list-style: none;
            padding: 10px;
            margin: 50px;
            font-size: 30px;
        }

        .facilities-list li {
            margin-bottom: 20px;
        }

        .facilities-list li:before {
            content: "\2022";
            color: #333;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .facilities-section a {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

         .facilities-section a:hover {
            background-color: #444;
        }  
    </style>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>

<body>
    <header>
        <nav>
            <h1>HOTEL SAROWAR <br>AFcilities<h1>
            <a href="home.php">Home</a>
            <a href="facilities.php">Facilities</a>
            <a href="contact.php">Contact</a>
            <a href="gallery.php">Gallery</a>
            <a href="room.php">Room</a>
            <a href="book.php" class="book">Book Now</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <!-- Main content -->

            <!-- Facilities section with the 'facilities-section' class -->
            <section class="facilities-section">
                <h2>Facilities</h2>
                <p>
                    Enjoy our world-class facilities that will make your stay unforgettable.
                </p>    
                <ul class="facilities-list">
                    <li>Swimming Pool</li>
                    <li>Spa & Wellness Center</li>
                    <li>Fitness Gym</li>
                    <li>Restaurant & Bar</li>
                    <li>Conference Rooms</li>
                    <li>24/7 Room Service</li>
                    <li>Concierge Service</li>
                    <li>Free Wi-Fi</li>
                </ul>
                <a href="" target="_blank">Explore All Facilities</a>
            </section>

            <!-- Other sections of the website -->
            <!-- ... -->
        </div>
    </main>

    <footer>
    <p>&copy; 2023 Hotel Sarowar. All rights reserved.</p>
    </footer>
</body>

</html>