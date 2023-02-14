<?php
$title= "Book A Cruise";
include '_header.php';
?>
<h1 class="bookACruise">Book A Cruise</h1>

<form class="cruiseForm">
    <label for="fullName">Full name</label>
    <input type="text" id="fullName" name="fullName">

    <label for="address">Address Line</label>
    <input type="street" id="address" name="address">

    <label for="city">City</label>
    <input type="city" id="city" name="city">

    <label for="state">State</label>
    <input type="state" id="state" name="state">

    <label for="zipcode">Zipcode</label>
    <input type="zip" id="zipcode" name="zipcode">

    <label for="pNumber">Phone Number</label>
    <input type="tel" id="pNumber" name="pNumber">

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email">

    <label for="cSelection">Cruise Selection</label>
    <input type="text" id="cSelection" name="cSelection">
    
    <button type="submit"></button>
</form>
<?php
    include '_footer.php';
?>