<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <style type="text/css">
        body{
            background-image: url('./img/background.jpg');
            background-repeat: no-repeat;  
            background-size: cover;
        }
        .book{
            text-align: center;
            border: 1px solid transparent;
            width: 1000px;
            margin-left: 480px;
            margin-top: 90px;
            background-color: rgba(255,255, 255,0.6);
        }
        label,p {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #444;
        }

    </style>
</head>
<body>
    <div class="book">
	<form action="addcustomerdata.php"  onsubmit="return validateForm()" method="post">
			<p style="font-size: 50px;">Book Now</p>
			<label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your Full Name" >
            <span class="error" id="nameError"></span><br><br>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number" >
            <span class="error" id="phoneError"></span><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" >
            <span class="error" id="emailError"></span><br><br>

            <label for="totalpeople">Total People:</label>
            <input type="text" id="totalpeople" name="totalpeople" placeholder="Enter Total number of people" required>
            
            <p>Adults</p>
            <select name="adults" id="adults" >
                <option>1 adult</option>
                <option>2 adults</option>
                <option>3 adults</option>
                <option>4 adults</option>
                <option>5 adults</option>
                <option>6 adults</option>
                <option>7 adults</option>
            </select>
            <p>Childrens</p>
                <select name="childrens" id="Childrens">
                <option>No children</option>
                <option>1 child</option>
                <option>2 children</option>
                <option>3 children</option>
                <option>4 children</option>
                <option>5 children</option>
            </select><br>

            <p>Check in</p>
            <input type="date" required id="checkindate" name="checkindate"><br>
            <p>Check out</p>
            <input type="date" required id="checkoutdate" name="checkoutdate"><br><br>

            <label for="typeofroom">Choose the type of Room:</label>
            <select name="typeofroom" id="typeofroom" required>
            	<option value="deluxeroom">Delux room</option>
            	<option value="suiteroom">Suite room</option>
            	<option value="smarttwinroom">Smart Twin room</option>
            	<option value="superiorqueenroom">Superior Queen room</option>
            </select><br><br>

            <input type="checkbox" name="confirm" required>
            <label>I believe that all the information that I provide are all true.</label><br><br>

            <button type="submit">Send Message</button>

	</form>
    </div>
	<script>
	function validateForm() {
        name = document.getElementById('name').value;
        phone = document.getElementById('phone').value;
        email = document.getElementById('email').value;

        nameError = document.getElementById('nameError');
        phoneError = document.getElementById('phoneError');
        emailError = document.getElementById('emailError');

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

        return !(nameError.textContent || phoneError.textContent || emailError.textContent);
    }
    </script>
</body>
</html>