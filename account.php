<html>
<head>
  <title>User Account</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
	<style>

.banner {

	border:1px solid black;
	min-height: 200px;
	width: 30%;
	position: absolute;
	left:33%;
	transition:1s;
	 box-shadow: 1px 1px 30px 10px rgba(0, 0, 0, 0.4);
	 margin_bottom: 2px;
text-shadow: 2px 2px 4px #000000;

}
.banner:hover{
	border:1px solid ;
	border-radius:20%;
	background:black;
	color:white;
	min-height: 200px;
	width: 30%;
	position: absolute;
	left:33%;
	transition:1s;
	text-shadow: 2px 2px 4px #ffff;
}
.typed_wrap {

	width: 290px;
	height: auto;
	padding: 30px;
	
	/*centers it in the .banner*/
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}

.typed_wrap h1 {
	display: inline;
}

/*Add custom cursor so it auto inherits font styles*/
.typed::after {
	content: '|';
	display: inline;
	-webkit-animation: blink 0.7s infinite;
	-moz-animation: blink 0.7s infinite;
	animation: blink 0.7s infinite;
}

/*Removes cursor that comes with typed.js*/
.typed-cursor{
   opacity: 0;
	display: none;
}
/*Custom cursor animation*/
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}

.btns {
	display: block;
	width: 400px;
	margin: 0;
	padding: 30px 0 0 30px;
}
.btns a {
	display: inline-block;
	margin-left: 5px;
}
.btns a:first-child{margin-left:0}
.btn {
	font-family: sans-serif;
	font-size: 14px;
	font-weight: 600;
	color: #ecf0f1;
	text-decoration: none;
}
a .btn {
	cursor: pointer;
	border: 1.5px solid #ecf0f1;
	border-radius: 5px;
	display: inline-block;
	padding: 10px;
	list-style-type: none;
	transition: all .3s;
}

.btn:hover {
	background: #ecf0f1;
	color: #34495e;
}
		#safety{
			position:absolute;
			top:30%;
			left:38%;
			
		}
		#left_pic{
			position:absolute;
			top:69%;
			left:5%;
			transition:3s;
		}
		#right_pic{
			position:absolute;
			top:69%;
			left:68%;
			transition:3s;
			
		}
		#left_pic:hover{
		position:absolute;
		left:50%;
		top: 69%;
		transition:3s;
	
	}
	#right_pic:hover{
		position:absolute;
		top:69%;
		left:20%;
		transition:3s;
	
	}
	.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
.icons {
	padding-left: 13%;
	padding-bottom: 0.5px;
	margin:10px;
}	</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Panacea</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="location.php">Show Location</a></li>
	  	<li><a href = "#" onclick="increase()">Give Attendance</a><li><br/><br/><br/><!--docs/QR.html-->

	        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Talk to feel better</button></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
echo "$check[0]";?></a></li>
      <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feel Better</h4>
        </div>
        <div class="modal-body">
          <iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/43213303-a638-401a-a9dc-ce276a091eba">
</iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="container icons">
<h4>You can Find us Everywhere!</h4>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-snapchat-ghost"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-android"></a>
<a href="#" class="fa fa-dribbble"></a>
<a href="#" class="fa fa-vimeo"></a>
<a href="#" class="fa fa-tumblr"></a>
<a href="#" class="fa fa-vine"></a>
<a href="#" class="fa fa-yahoo"></a>
<a href="#" class="fa fa-reddit"></a>


</div>
<br/>
<div id="page_wrap">
	
	<div class="banner">
		<div class="typed_wrap">
			<h1><span class="typed"></span></h1>
		</div>
	</div>
</div>
<br/><br/><br/>
<script>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>
<script >$(function () {
	$(".typed").typed({
		strings: ["We are here to Help.", "Your safety matters.", "One for all, all for one."],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 50,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 5,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function () {},
		// starting callback function before each string
		preStringTyped: function () {},
		//callback for every typed string
		onStringTyped: function () {},
		// callback for reset
		resetCallback: function () {} });

});
//# sourceURL=pen.js
</script>
<script>
 function increase(){
			   <?php
				$usernam = $_POST['name'];
				$sql = "UPDATE user_info SET Attendance=1 WHERE Username = '$usernam'";
				
				if ($conn->query($sql) === TRUE) {
    echo "Loading....";
} else {
    echo "Error updating record: " . $conn->error;
}
			   ?>
			
</script>
<br/>
<br/>
<img id = "left_pic" height="100px" src = "imgs/left.jpg"/>
<img id = "right_pic" height="100px" src = "imgs/right.jpg"/>
</html>




