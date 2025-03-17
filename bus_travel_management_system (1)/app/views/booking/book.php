<!DOCTYPE html>
<html>
<head><title>Book a Ticket</title></head>
<body>
    <form action='/booking/book' method='POST'>
        <label>Select Bus:</label>
        <select name='bus'>
            <option value='1'>Bus 1</option>
            <option value='2'>Bus 2</option>
        </select>
        <button type='submit'>Book Now</button>
    </form>
</body>
</html>
