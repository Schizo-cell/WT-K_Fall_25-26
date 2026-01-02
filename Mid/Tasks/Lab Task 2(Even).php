<!DOCTYPE html>
<html>
<head>
    <title>Participantssss Registration Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f8ff;
        }

        h2, h3 {
            text-align: center;
            color: #030303ff;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #030303ff;
        }

        button {
            background-color: #030303ff;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #030303ff;
        }

        #output, #error {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }

        #error {
            color: red;
        }

        #output {
            color: #030303ff;
        }
    </style>
</head>
<center>
<body>
    <h2>Participant Registration</h2>
    <form onsubmit="return handleSubmit()">
        <label>Full Name:</label>
        <input type="text" id="name" />
        
        <label>Email Address:</label>
        <input type="text" id="email" />
        
        <label>Phone Number:</label>
        <input type="number" id="number" />
        
        <label>Password:</label>
        <input type="password" id="password" />
        
        <label>Confirm Password:</label>
        <input type="password" id="confirmPassword" />
        
        <button type="submit">Register</button>
    </form>

    <div id="error"></div>
    <div id="output"></div>

    <h3>Activity Selection</h3>
    <form onsubmit="return handleActivitySubmit()">
        <label>Activity Name:</label>
        <input type="text" id="activityName" />
        
        <button type="submit">Add Activity</button>
    </form>

    <div id="activityOutput"></div>
    <div id="activityError"></div>

    <script>
        function handleSubmit() {
            var fullname = document.getElementById("name").value.trim();
            var emailaddress = document.getElementById("email").value.trim();
            var phonenumber = document.getElementById("number").value.trim();
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmPassword").value;
            var errorDiv = document.getElementById("error");
            var outputDiv = document.getElementById("output");
            errorDiv.innerHTML = "";
            outputDiv.innerHTML = "";

            if (fullname === "" || emailaddress === "" || phonenumber === "" || password === "" || confirmpassword === "") {
                errorDiv.innerHTML = "Please fill in all fields.";
                return false;
            }

            if (phonenumber.length > 11) {
                errorDiv.innerHTML = "Phone number cannot be more than 11 digits.";
                return false;
            }

            if (password !== confirmpassword) {
                errorDiv.innerHTML = "Passwords do not match.";
                return false;
            }

            outputDiv.innerHTML = `<strong>Registration Complete!</strong><br><br>
                                    Full Name: ${fullname}<br>
                                    Email Address: ${emailaddress}<br>
                                    Phone Number: ${phonenumber}<br>
                                    Password: ${password}<br>
                                    Confirm Password: ${confirmpassword}`;

            return false;
        }
        function handleActivitySubmit() {
            var activityName = document.getElementById("activityName").value.trim();
            var activityErrorDiv = document.getElementById("activityError");
            var activityOutputDiv = document.getElementById("activityOutput");
            activityErrorDiv.innerHTML = "";
            activityOutputDiv.innerHTML = "";

            if (activityName === "") {
                activityErrorDiv.innerHTML = "Please enter an activity name.";
                return false;
            }

            activityOutputDiv.innerHTML = `<strong>Activity Added:</strong><br>Activity Name: ${activityName}`;

            return false;
        }
    </script>
</body>
</center>
</html>
