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
    <select type="zip" id="zipcode" name="zipcode">
        <option value="option1">Please Select: </option>
    </select>
    <label for="pNumber">Phone Number</label>
    <input type="tel" id="pNumber" name="pNumber">

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email">

    <label for="cSelection">Cruise Selection</label>
    <select type="text" id="cSelection" name="cSelection">
        <option value="option1">Please Select: </option>
        <option value="option2">Cruise 1</option>
        <option value="option3">Cruise 2</option>
        <option value="option4">Cruise 3</option>
        <option value="option5">Please Select: </option>
    </select>
    
    <button type="submit" value="submit">Submit</button>
</form>
<?php
    include '_footer.php';
?>