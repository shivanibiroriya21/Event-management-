<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Form</title>
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
    </style>
</head>
<body>

<div class="container">
    <h2>Event Booking Form</h2>
    <form >
        <label for="name">Full Name</label>
        <input type="text" placeholder="name" name="u" id="name" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" placeholder="email" name="e"  id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" placeholder="tel" name="t"  id="phone" name="phone" required>

        <label for="event-type">Event Type</label>
        <select placeholder="event-type" name="et"  id="event-type" name="event-type" required>
            <option value="">Select an event type</option>
            <option value="wedding">Wedding</option>
            <option value="conference">Conference</option>
            <option value="birthday">Birthday</option>
            <option value="concert">Concert</option>
            <option value="corporate">Corporate Event</option>
            <option value="other">Other</option>
        </select>

        <label for="event-date">Event Date</label>
        <input type="date" placeholder="date" name="d"  id="event-date" name="event-date" required>

        <label for="attendees">Number of Attendees</label>
        <input type="number" placeholder="number" name="n"  id="attendees" name="attendees" required min="1">

        <label for="requests">Special Requests</label>
        <textarea placeholder="requests" name="r"  id="requests" name="requests" rows="4" placeholder="Any special requests"></textarea>

        <button type="submit" name="submit" value="Book">Submit Booking</button>
    </form>
    <?php
    $con=mysqli_connect('localhost','root','','project');
    if(isset($_REQUEST['submit']))
    {
        $u=$_REQUEST['u'];
        $e=$_REQUEST['e'];
        $t=$_REQUEST['t'];
        $et=$_REQUEST['et'];
        $d=$_REQUEST['d'];
        $n=$_REQUEST['n'];
        $r=$_REQUEST['r'];
        $q="insert into ubook(uname,email,number,eventtype,eventdate,Attendees,Request)values('$u','$e','$t','$et','$d','$n','$r')";
        mysqli_query($con,$q);
        echo "<h3>Thanks for Booking </h3>";
         
    }

    ?>
</div>

</body>
</html>