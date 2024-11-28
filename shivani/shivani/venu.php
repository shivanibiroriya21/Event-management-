<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
<div class="container">
    <h2>Venue Selection</h2>
    <form method="POST">
        <label for="Venue-Type">Venue Type</label>
        <select name="vt" id="Venue-Type" required>
            <option value="">Select a Venue Type</option>
            <option value="Hotel Aakash">Hotel Aakash</option>
            <option value="Prem Nagar Cafe">Prem Nagar Cafe</option>
            <option value="Snack Rack">Snack Rack</option>
            <option value="Aura">Aura</option>
            <option value="Condoli Adda">Condoli Adda</option>
        </select>
        
        <label for="event-date">Event Date</label>
        <input type="date" id="event-date" name="date" required>
        
        <button type="submit" name="submit" value="Book">Submit Venue</button>
    </form>
    
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'project');
    
    if (isset($_REQUEST['submit'])) {
        $vt = $_REQUEST['vt'];
        $date = $_REQUEST['date'];
        
        // Check if the venue is already booked for the selected date
        $checkQuery = "SELECT * FROM uvenue WHERE vtype = '$vt' AND date = '$date'";
        $result = mysqli_query($con, $checkQuery);
        
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='error-message'>Venue is already booked for this date. Please select a different date or venue.</div>";
        } else {
            // Insert the booking into the database
            $insertQuery = "INSERT INTO uvenue (vtype, date) VALUES ('$vt', '$date')";
            mysqli_query($con, $insertQuery);
            echo "<div class='success-message'>Thank you! Your venue has been successfully booked.</div>";
        }
    }
    ?>
</div>

</body>
</html>
