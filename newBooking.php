<html>
    <body>
        <form method="POST" action="createNewBooking.php"> 
            <?PHP include ("createMemberDropdown.php");?> <br>
            Court ID: <input type="text" name="courtID"><br>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
</html>