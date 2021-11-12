<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>

<div id="id01" class="modal">
 
  <form class="modal-content animate" action="https://www.w3schools.com/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/admin.png" alt="Avatar" class="avatar">
      <h2 style="color:#6699cc">Login Page</h2>
    </div>

    <div>      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset">reset</button>
               </div>

    <div class="containerr" style="background-color:rgb(0,32,96)">
        <span class="psw"><a href="#"><u>forgot password?<u></a></span>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
         </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>