<html lang="en">
<head>
<style>	

body {
	background-image: url(https://salesboxai.com/wp-content/uploads/2019/12/Contact-us-background-1.jpg);
	background-repeat: no repeat;
	background-size: cover;
}

p {
	text-align: center;
	font-size: 40px;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}

input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  float: right;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-size: 40px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


<meta charset = "UTF-8">
<title>Comment</title>
</style>
</head>

<body>
<p><b>Write a Comment</b></p>

<form action="Comment.php">

<div class="row">
    <div class="col-25">
  <label for="Name">Name</label>
	</div>
    <div class="col-75">
	<input type="text" id="Name" name="Name" placeholder="Write your name..">
	</div>
	</div>
  
<div class="row">
    <div class="col-25"> 
  <label for="Gender">Gender</label>
	</div>
	<div class="col-75">
	<select id="Gender" name="Gender">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	</select>
	</div>
	</div>
  
<div class="row">
    <div class="col-25"> 
  <label for="Email">Email</label>
	</div>
	<div class="col-75">
	<input type="text" id="Email" name="Email" placeholder="Write your email..">
	</div>
	</div>
  
<div class="row">
	<div class="col-25">
  <label for="Comment"<b>Comment</b></label>
	</div>
	<div class="col-75">
  <textarea placeholder="Write your comment.."></textarea>
	</div>
	</div>
  
  <input type="submit" value="Submit" onclick="javascript:alert('Your comment have been record.Thank you for visiting my webpage')">
  </div>
</form>


</body>

</html>
