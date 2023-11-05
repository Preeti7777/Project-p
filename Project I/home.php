<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL SAROWAR - Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .hero-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }

        .section {
            margin: 2rem 0;
        }

        .section h2 {
            margin-bottom: 1rem;
        }


        .home{
            padding: 0;
        }
        .home .image{
            min-height: 100vh;
            background-size: cover !important;
            background-position: center !important;
        }


        .about .row{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 6rem;
        }

        .about .row .image{
            flex: 1 1 30rem;
        }

        .about .row .image img{
            width:100%;
        }

        .about .row .content{
            flex: 1 1 51rem;
        }

        .about .row .content h3{
            font-size: 3.5rem;
            color: var(--primary);
            padding: 2rem 0;
        }

        .about .row .content p{
            font-size: 1.2rem;
            color: #666;
            padding: 1rem 0;
            line-height: 1.8;
        }

        .view{
            padding-right: 400px;
            padding-left: 400px;
        }

        .gallery {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
        }

        .review {
          width: 250px;
          margin: 15px;
          padding: 15px;
          background-color: #fff;
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
          text-align: center;
        }

        .review h1 {
          font-size: 1.2rem;
          margin: 0;
        }

        .review p {
          font-size: 1rem;
          margin: 5px 0;
          color: #777;
        }
    </style>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>

<body>
    <header>
            <nav>
                <h1>HOTEL SAROWAR <br>Home<h1>
                <a href="home.php">Home</a>
                <a href="facilities.php">Facilities</a>
                <a href="contact.php">Contact</a>
                <a href="gallery.php">Gallery</a>
                <a href="room.php">Room</a>
                <a href="book.php" class="book">Book Now</a>
            </nav>
    </header>

    <section class="home" id="home">
    <div class="image" style="background:url(./img/hotel-sarowar.jpg)"></div>
  </section>
<section class="about" id="about">
    <div class="row">
        <div class="image">
            <img src="./img/background.jpg">
        </div>
            <div class="content">
                <h3>About us</h3>
                <p>This upscale Swiss International Hotel Sarowar-Pokhara is a 4-star property located about 20 minutes by foot from the style World Peace Pagoda Buddhist Monument. Boasting location next to Damside, the smoke free hotel offers 96 rooms together with a poolside bar onsite.</p>
                <p>Fewa Lake is nearly 25 minutes' walk away. The city centre of Pokhara can be reached in 25 minutes on foot. There is the expansive International Mountain Museum nearly 25 minutes' walk away, and Tourist Park a mere 0.8 km from this Pokhara hotel.</p>
                <p>The rooms of Swiss International Hotel Sarowar-Pokhara feature elegant furniture.</p>
                <p>A continental breakfast is also offered onsite. The hotel has a bar with a spacious terrace and a lounge. You may walk 5 minutes to Yarsa The Thakali Kitchen or eat by Caffe Italiano, located 100 metres away. Additional facilities at this Pokhara property include children's menu, a mini club and a wading pool for guests with children. There is a fitness room in the upscale accommodation.</p>
            </div>
    </div>
</section>

<section>
    <div class="view">
        <form action="addreview.php" method="post" onsubmit="return validateForm()">
            <label>Name</label>
            <input type="text" name="name" id="name">
            <span class="error" id="nameError"></span><br><br>
            <label>Review</label>
            <input type="text" name="review" id="review" placeholder="review" style="width: 800px;">
            <button type="submit">Submit</button>
        </form>
        <script>
            function validateForm(){
            name = document.getElementById('name').value;
            nameError = document.getElementById('nameError');
            if (!name) {
            nameError.textContent = 'Please enter your name.';
            } else {
                nameError.textContent = '';
            }
            return !(nameError.textContent);
        }
        </script>
    </div>
</section>
<section>
    <div class="gallery">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sarowar";

    // Create a connection to the existing database
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve student data from the "review" table
    $sql = "SELECT name,review FROM review";
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $review = $row['review'];
    ?>
    <div class="review">
        <h1><?php echo $name; ?></h1>
        <p>Review: <?php echo $review; ?></p>
    </div>
    <?php
        }
    } else {
        echo "";
    }

    $conn->close();
    ?>
</div>
</section>

    <footer>
        <p>&copy; 2023 Your Hotel Name. All rights reserved.</p>
    </footer>
</body>

</html>