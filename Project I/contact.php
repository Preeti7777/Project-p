<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Internal CSS for Contact Us Section */

        .container{
            float: left;
            width: 47.5%;
            padding: 20px;
        }
        .contact-section{

            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            max-width: 700px;
            margin: 10px;
            margin:100px;
            margin-left: 150px;
            background-color: rgba(255,255, 255,0.6);
        }

        .contact-section h1 {
            font-size: 30px;
            color: black;
        }

        .contact-section p {
            color: black;
            font-size: 20px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #444;
        }


        .info{
            font-size: 30px;
        }
        .info {
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            max-width: 800px;
            margin: 20px;
            margin:100px;
            margin-left: 150px;
            background-color: rgba(255,255, 255,0.6);
        }


        .mapp img{
            width: 1000px;
            height: 500px;
        }
        .mapp{
            font-size: 30px;
            text-align: center;
        }



        .error {
            color: red;
        }

        main {
          background-image: url("./img/background.jpg");
          height: 100%; 

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <header>
        <nav>
            <h1>HOTEL SAROWAR <br> Contact<h1>
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
            <div class="info">
                <h1>Our information</h1>
                <p>If you have any querries, feel free to get in touch with us.</p>
            <address>
                <p><strong>Hotel SAROWAR</strong></p>
                <p>123 Paradise Street</p>
                <p>Sunnyville, CA 12345</p>
                <p>Email: info@hotelsarowar.com</p>
                <p>Phone: +977 9806552899</p>
            </address>
            </div>        
        </div>




        <div class="container">
            <!-- Main content -->

            <!-- Contact Us section with the 'contact-section' class -->
            <section class="contact-section">
                <h1>Contact Us</h1>
                <p>
                    Have questions or need more information? Contact us using the form below.
                </p>
                <form class="contact-form" onsubmit="return validateForm()" method="post" action="addqueries.php">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Full Name" >
                    <span class="error" id="nameError"></span><br><br>

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your Phone Number" >
                    <span class="error" id="phoneError"></span><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your Email" >
                    <span class="error" id="emailError"></span><br><br>

                    <label for="message">Message:</label>
                    <input type="text" name="message" id="message" style="width: 580px;height: 50px;" placeholder="Enter Your Queries">
                    
                    <span class="error" id="messageError"></span><br><br>

                    <button type="submit">Send Message</button>
                </form>
            </section>

            <!-- Other sections of the website -->
            <!-- ... -->
        </div>



        <div class="mapp">
            <h1 style="color: white;">Map</h1>
            <!-- <a target="_blank" href=""><img src="./img/map1.jpg"></a> -->
            <a target="_blank" href="https://www.google.com/maps/place/Hotel+Sarowar/@28.2091459,83.9570809,17.8z/data=!4m9!3m8!1s0x3995951e9cb03e75:0x4a427e142153b30c!5m2!4m1!1i2!8m2!3d28.209302!4d83.9582466!16s%2Fg%2F11cs6hdh85?authuser=0&entry=ttu"><img src="./img/map2.jpg"></a>
        </div>
    
    </main>
    <footer>
    <p>&copy; 2023 Hotel Sarowar. All rights reserved.</p>
    </footer>




    <script>
    function validateForm() {
        name = document.getElementById('name').value;
        phone = document.getElementById('phone').value;
        email = document.getElementById('email').value;
        message = document.getElementById('message').value;

        nameError = document.getElementById('nameError');
        phoneError = document.getElementById('phoneError');
        emailError = document.getElementById('emailError');
        messageError = document.getElementById('messageError');

        phonePattern = /^\d{10}$/;
        emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
     

        if (!name) {
            nameError.textContent = 'Please enter your name.';
        } else {
            nameError.textContent = '';
        }

        if (!phone) {
            phoneError.textContent = 'Please enter your phone number.';
        } else if (!phonePattern.test(phone)) {
            phoneError.textContent = 'Please enter a valid 10-digit phone number.';
        } else {
            phoneError.textContent = '';
        }

        if (!email) {
            emailError.textContent = 'Please enter your email address.';
        } else if (!emailPattern.test(email)) {
            emailError.textContent = 'Please enter a valid email address.';
        } else {
            emailError.textContent = '';
        }

        if (!message) {
            messageError.textContent = 'Please enter your message.';
        } else {
            messageError.textContent = '';
        }

        return !(nameError.textContent || phoneError.textContent || emailError.textContent || passwordError.textContent || rePasswordError.textContent);
    }
    </script>


</body>

</html>