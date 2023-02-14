<?php
$title= "Book A Cruise";
include '_header.php';
?>
<h1 class="bookACruise">Book A Cruise</h1>
<form>
    <label for="fullName">Full name</label>
    <input type="text" id="fullName" name="fullName">

    <label for="address">Address Line</label>
    <input type="text" id="address" name="address">

    <label for="city">City</label>
    <input type="text" id="city" name="city">

    <label for="state">State</label>
    <input type="text" id="state" name="address">
    
</form>
<?php
    include '_footer.php';
?>