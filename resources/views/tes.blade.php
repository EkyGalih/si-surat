<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html,
		body {
			height: 100%;
		}
		body {
			background: radial-gradient(farthest-side at 50% 0%, #050E36, #000033);
			background: -webkit-radial-gradient(farthest-side at 50% 0%, #050E36, #000033);
			background: -moz-radial-gradient(farthest-side at 50% 0%, #050E36, #000033);
			font-family: 'Helvetica Rounded', 'Arial Rounded MT Bold', 'Montserrat', sans-serif;
			color: #fff;
		}

		.container {
			display: block;
			width: 100%;
			height: 100%;
		}

		.chk-none {
			display: none; /*remove checkbox*/
		}

		.toggle {
			cursor: pointer;
			display: inline-block;
			position: relative;
			width: 100px;
			height: 50px;
			border-radius: 50px;
			border: 4px solid white;
			overflow: hidden;
			left: 50%; /* left, top, tranform for centering container*/
			top: 50%;
			transform: translate3D(-50%, -50%, 0);
			-webkit-transform: translate3D(-50%, -50%, 0);
			-moz-transform: translate3D(-50%, -50%, 0);
		}

		.toggle::before,
		.toggle::after {
			position: absolute;
			width: 100px;
			height: 50px;
			border-radius: 50px;
			padding: 16px 10px;
			font-weight: bold;
			box-sizing: border-box;
			transition: left .5s ease-in-out;
			-webkit-transition: left .5s ease-in-out;
			-moz-transition: left .5s ease-in-out;
		}

		.toggle::before {
			content: "ON";
			color: lightsteelblue;
			background-color: royalblue;
			text-align: left;
			box-shadow: inset 0 0 5px 1px rgba(0, 0, 128, 0.3);
			left: -50px;
		}

		.toggle::after {
			content: "OFF";
			background-color: lightgrey;
			text-align: right;
			color: grey;
			box-shadow: inset 0 0 5px 1px rgba(0, 0, 0, 0.3);
			left: 0px;
		}

		.handle {
			display: inline-block;
			position: relative;
			width: 50px;
			height: 50px;
			border-radius: 50px;
			background-color: dimgrey;
			box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.3);
			z-index: 5;
			left: 0px;
			transition: left .5s ease-in-out, background-color .5s ease-in-out;
			-webkit-transition: left .5s ease-in-out, background-color .5s ease-in-out;
			-moz-transition: left .5s ease-in-out, background-color .5s ease-in-out;
		}

		input[type="checkbox"]:checked + .toggle::before {
			left: 0px;
		}

		input[type="checkbox"]:checked + .toggle::after {
			left: 50px;
		}

		input[type="checkbox"]:checked + .toggle .handle {
			left: 50px;
			background-color: cornflowerblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<input type="checkbox" id="chk" class="chk-none">
		<label for="chk" class="toggle">
			<span class="handle"></span>
		</label>
	</div>
</body>
</html>