<html>
	<head>
		<title>Bootstrap Google</title>
		<link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/dist/css/ie10-viewport-bug-workaround.css">
		<link rel="stylesheet" href="assets/dist/css/todc-bootstrap.min.css">
		<link rel="stylesheet" href="assets/custom/css/custom.css">
	</head>
	<body>
		<nav class="navbar navbar-toolbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Default</a></li>
						<li><a href="#">Static top</a></li>
						<li class="active"><a href="login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
		
		
			<div class="page-header">
				<h1>Carousel</h1>
			</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
					</div>
					<div class="item">
						<img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
					</div>
					<div class="item">
						<img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			
			
			
			<div class="page-header">
				<h1>Thumbnails</h1>
				<img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
			</div>
			
			
			
			<div class="page-header">
				<h1>Badges</h1>
			</div>
			<ul class="nav nav-pills" role="tablist">
				<li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
				<li role="presentation"><a href="#">Profile</a></li>
				<li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
			</ul>
			
			
			
			
			<div class="page-header">
				<h1>Dropdown menus</h1>
			</div>
			<div class="dropdown theme-dropdown clearfix">
				<a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</div>

			<div class="dropdown theme-dropdown clearfix">
				<a id="dropdownMenu2" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				<div class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
					<div class="container-fluid">
						<div class="media">
							<a href="#" class="pull-left">
								<img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Media heading</h4>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="dropdown theme-dropdown clearfix">
				<a id="dropdownMenu3" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				<div class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
					<div class="container-fluid">
						<div class="row show-grid">
							<div class="col-xs-6">.col-xs-6</div>
							<div class="col-xs-6">.col-xs-6</div>
						</div>
					</div>
				</div>
			</div>

			
			
			<div class="page-header">
				<h1>Panels <small>additional examples</small></h1>
			</div>
			<div class='row'>
				<div class='col-sm-4'>
					<div class="panel panel-default">
						<img alt="450x300" data-src="holder.js/450x300/acs" class='img-responsive'>
						<div class="panel-body">
							<p class='lead'>Card Example</p>
							<p>20 Followers, 2 Posts</p>
							<p>
								<img alt="28x28" data-src="holder.js/28x28/acs">
								<img alt="28x28" data-src="holder.js/28x28/#333:#fff">
								<img alt="28x28" data-src="holder.js/28x28/sky">
							</p>
						</div>
					</div>
				</div>

				<div class='col-sm-4'>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class='panel-title'>Card Example</h4>
						</div>
						<div class="panel-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class='panel-footer'>
							<a class='btn btn-default' href='#'>+1</a>
							<a class='btn btn-default' href='#'>Share</a>
						</div>
					</div>
				</div>

				<div class='col-sm-4'>
					<div class="panel panel-default">
						<img alt="450x300" data-src="holder.js/450x300/#427fed:#fff" class='img-responsive'>
						<img alt="80x80" data-src="holder.js/80x80/#57a744:#fff" class='img-circle' style='display: block; width: 80px; margin: -40px auto 0;'>
						<div class="panel-body">
							<p class='lead text-center'>Card Example</p>
							<ul class='list-unstyled'>
								<li class='text-center'>Lorem ipsum</li>
								<li class='text-center'>Lorem ipsum</li>
								<li class='text-center'>Lorem ipsum</li>
							</ul>
							<div class='text-center'><a class='btn btn-default' href='#'>Add</a></div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="page-header">
				<h1>Scrollbars</h1>
			</div>
			<div class="alert alert-warning">
				<h4>Heads up!</h4>
				<p>Available only in Chrome and Safari.</p>
			</div>
			<div class="scrollable scrollable-shadow" style="height: 200px; overflow-y: auto;">
				<h4>Overflowing text to show optional scrollbar</h4>
				<p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
			</div>
			
			
		</div>
			
			
			
	
		<script src="assets/dist/js/jquery.min.js"></script>
		<script src="assets/custom/js/docs.min.js"></script>
		<script src="assets/dist/js/bootstrap.min.js"></script>
		
	</body>
</html>