<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale">

  <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
  <script src="assets/js/contact.js"></script>
</head>
<body>


  <div class="container">
    <h1 style="text-align:center; "><b>Contact Form</b></h1>
    <div id="error"></div>

    <form  action="insert.php" method="post"  onsubmit="return validation()">
      <p><label for="fname" >First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </p>

      <p>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </p>

      <p>
        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email..">
      </p>

      <p>
        <label for="province">Province</label>
        <select id="province" name="province">
          <option value="Default">Default</option>
          <option value="province1">Western</option>
          <option value="province2">Central</option>
          <option value="province3">Southern</option>
          <option value="province4">Uva</option>
          <option value="province5">Sabaragamuwa</option>
          <option value="province6">North Western</option>
          <option value="province7">North Central</option>
          <option value="province8">Northern </option>
          <option value="province9">Eastern</option>
        </select>
      </p>

      <p>
        <label for="messege">Messege</label>
        <textarea id="messege" name="messege" placeholder="Write Your Messege.." style="height:150px; color: blue;"></textarea>
      </p>



      <button type="submit" name="submit">SEND</button>
    </form>
  </div>

</body>
</html>
