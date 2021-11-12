<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ይግቡ</a>

<div id="id01" class="modal">
 
  <form class="modal-content animate" action="https://www.w3schools.com/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/admin.png" alt="Avatar" class="avatar">
      <h2 style="color:#6699cc">መግቢያ_ገጽ</h2>
    </div>

    <div>      <label for="uname"><b>የተጠቃሚ_ስም</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>የይለፍ_ቃል</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit">ግባ</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset">ሰርዝ</button>
               </div>

    <div class="containerr" style="background-color:rgb(0,32,96)">
        <span class="psw"><a href="#"><u>የይለፍ_ቃል ረሳሁ?</u></a></span>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">አጥፋ</button>
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