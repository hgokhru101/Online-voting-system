<?php session_start();
require("config.php"); 

if($_SESSION['login_user']=="")
{
	echo"
	<script>
	 alert('Your are not logged in. Kindly, please login');
	 window.location.href='home.html';
	 </script>";
} ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Arvo|Caveat|Dancing+Script|Mansalva&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
	<title>Voter page</title>
	<link rel="stylesheet" type="text/css" href="voter.css">
</head>
<body>
                    
    <div class="logo-link">
        <img src="http://icons.iconarchive.com/icons/iconarchive/blue-election/512/Election-Vote-icon.png" alt="logo" border="0" height="70" width="65">
    </div>
    <div class="vertical_align" style=" color:white;font-size: 18px;"> 
        <h1 style="font-family: 'Merriweather', serif;">Easypolls</h1>
        <h4 style="font-family: 'Dancing Script', cursive;">Every vote counts</h4>
    </div>
	<br>
	<ul class="mid">
            <li class="mid"> <a class="mid" href="voter.php">My profile</a> </li>
            <li class="mid"> <a class="mid" href="poll.php">Poll</a></li>
            <li class="mid"> <a class="mid" href="logout.php">Log out</a></li>
        </ul>
	<br>
	<br>
	<br>
	<br>
		<?php $query= "SELECT * FROM voter where uid= '{$_SESSION['login_user']}' ;";
			$result = mysqli_query($conn,$query);
      		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		?>
		<div class="form">
			<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
			<span><pre>Username:  </pre></span><?php echo $row['uid']; echo"<br />";?>
			<span>Voter-Id:</span> <?php echo $row['vid']; echo"<br />";?>
			<span>Name:</span> <?php echo $row['name']; echo"<br />";?>
			<span>Contact No:</span> <?php echo $row['mobile_no']; echo"<br />";?>
			<span>Address:</span> <?php echo $row['address']; echo"<br />";?>
			<span>Age:</span> <?php echo $row['age']; echo"<br />";?>
			<span>Zone:</span> <?php echo $row['zone']; echo"<br />";?>
			<span>Gender:</span> <?php echo $row['gender']; echo"<br />";?>
		</div>
	<script>
    let box = document.querySelectorAll(".box");
	function frontFunction() {
		box.forEach(x => x.addEventListener("click", function () {
			this.classList.add("active"); }));
	}
	function backFunction() {
		box.forEach(x => x.addEventListener("click", function () {
		this.classList.remove("active"); }));
	}
</script>
</body>
</html>