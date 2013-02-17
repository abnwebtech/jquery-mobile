<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listviews - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../_assets/favicon.ico">

	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
</head>
<body>
<div data-role="page">

	<div data-role="header" class="jqm-header">
		<h1>Listviews</h1>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../../search.php' ); ?>
	</div><!-- /header -->
	
	<div data-role="content" class="jqm-content">
	
		
		
			<h2>Non-inset listviews</h2>

			<h3>Read-only</h3>

			<div data-demo-html="true">
				<ul data-role="listview">
					<li>Acura</li>
					<li>Audi <span class="ui-li-count">3</span></li>
					<li>BMW <span class="ui-li-count">2</span></li>
					<li>Cadillac</li>
					<li>Ferrari <span class="ui-li-count">1</span></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Read-only, ordered</h3>

			<div data-demo-html="true">
				<ol data-role="listview">
					<li>Acura</li>
					<li>Audi</li>
					<li>BMW</li>
					<li>Cadillac</li>
					<li>Ferrari</li>
				</ol>
			</div><!--/demo-html -->

			<h3>Linked</h3>

			<div data-demo-html="true">
				<ul data-role="listview">
					<li><a href="#">Acura</a></li>
					<li><a href="#">Audi</a></li>
					<li><a href="#">BMW</a></li>
					<li><a href="#">Cadillac</a></li>
					<li><a href="#">Ferrari</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Linked, ordered</h3>

			<div data-demo-html="true">
				<ol data-role="listview">
					<li><a href="#">The Godfather</a></li>
					<li><a href="#">Inception</a></li>
					<li><a href="#">The Good, the Bad and the Ugly </a></li>
					<li><a href="#">Pulp Fiction</a></li>
					<li><a href="#">Schindler's List</a></li>
				</ol>
			</div><!--/demo-html -->

			<h3>Count bubbles</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-count-theme="e">
					<li><a href="#">Inbox <span class="ui-li-count">12</span></a></li>
					<li><a href="#">Outbox <span class="ui-li-count">0</span></a></li>
					<li><a href="#">Drafts <span class="ui-li-count">4</span></a></li>
					<li><a href="#">Sent <span class="ui-li-count">328</span></a></li>
					<li><a href="#">Trash <span class="ui-li-count">62</span></a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Divider, count bubbles, split buttons</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-divider-theme="d" data-split-theme="e" data-split-icon="grid">
					<li data-role="list-divider">Mail</li>
					<li><a href="#">Inbox <span class="ui-li-count">12</span></a><a href="#">Click me</a></li>
					<li><a href="#">Outbox <span class="ui-li-count">0</span></a><a href="#">Click me</a></li>
					<li><a href="#">Drafts <span class="ui-li-count">4</span></a><a href="#">Click me</a></li>
					<li><a href="#">Sent <span class="ui-li-count">328</span></a><a href="#">Click me</a></li>
					<li><a href="#">Trash <span class="ui-li-count">62</span></a><a href="#">Click me</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Nested</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-header-theme="e">
					<li>Animals
						<ul>
							<li>Pets
								<ul>
									<li><a href="index.html">Canary</a></li>
									<li><a href="index.html">Cat</a></li>
									<li><a href="index.html">Dog</a></li>
								</ul>
							</li>
							<li>Farm animals
								<ul>
									<li><a href="index.html">Chicken</a></li>
									<li><a href="index.html">Cow</a></li>
									<li><a href="index.html">Sheep</a></li>
								</ul>
							</li>
							<li>Wild animals>
								<ul>
									<li><a href="index.html">Alligator</a></li>
									<li><a href="index.html">Bear</a></li>
									<li><a href="index.html">Zebra</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>Colors
						<ul>
							<li><a href="index.html">Blue</a></li>
							<li><a href="index.html">Green</a></li>
							<li><a href="index.html">Red</a></li>
						</ul>
					</li>
					<li>Vehicles
						<ul>
							<li>Cars
								<ul>
									<li><a href="index.html">Audi</a></li>
									<li><a href="index.html">BMW</a></li>
									<li><a href="index.html">Volkswagon</a></li>
								</ul>
							</li>
							<li>Planes
								<ul>
									<li><a href="index.html">Boeing</a></li>
									<li><a href="index.html">Embraer</a></li>
									<li><a href="index.html">Airbus</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div><!--/demo-html -->

			<h3>Divided, formatted content</h3>

			<div data-demo-html="true">
				<ul data-role="listview">
					<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
					<li><a href="index.html">
						<h3>Stephen Weber</h3>
						<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
						<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
						<p class="ui-li-aside"><strong>6:24</strong>PM</p>
					</a></li>
					<li><a href="index.html">
						<h3>jQuery Team</h3>
						<p><strong>Boston Conference Planning</strong></p>
						<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
						<p class="ui-li-aside"><strong>9:18</strong>AM</p>
					</a></li>
					<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
					<li><a href="index.html">
						<h3>Avery Walker</h3>
						<p><strong>Re: Dinner Tonight</strong></p>
						<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
						<p class="ui-li-aside"><strong>4:48</strong>PM</p>
					</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Icon, count bubbles</h3>

			<div data-demo-html="true">
				<ul data-role="listview">
					<li><a href="#"><img src="../../_assets/img/gf.png" alt="France" class="ui-li-icon ui-corner-none">France <span class="ui-li-count">4</span></a></li>
					<li><a href="#"><img src="../../_assets/img/de.png" alt="Germany" class="ui-li-icon">Germany <span class="ui-li-count">4</span></a></li>
					<li><a href="#"><img src="../../_assets/img/gb.png" alt="Great Britain" class="ui-li-icon">Great Britain <span class="ui-li-count">0</span></a></li>
					<li><a href="#"><img src="../../_assets/img/fi.png" alt="Finland" class="ui-li-icon">Finland <span class="ui-li-count">12</span></a></li>
					<li><a href="#"><img src="../../_assets/img/us.png" alt="United States" class="ui-li-icon ui-corner-none">United States <span class="ui-li-count">62</span></a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Thumbnail, split buttons</h3>

			<div data-demo-html="true">
				<ul data-role="listview">
					<li><a href="#">
						<img src="../../_assets/img/album-bb.jpg" />
						<h3>Broken Bells</h3>
						<p>Broken Bells</p></a>
						<a href="#">Purchase album</a>
					</li>
					<li><a href="#">
						<img src="../../_assets/img/album-hc.jpg" />
						<h3>Warning</h3>
						<p>Hot Chip</p></a>
						<a href="#">Purchase album</a>
					</li>
					<li><a href="#">
						<img src="../../_assets/img/album-p.jpg" />
						<h3>Wolfgang Amadeus Phoenix</h3>
						<p>Phoenix</p></a>
						<a href="#">Purchase album</a>
					</li>
				</ul>
			</div><!--/demo-html -->

			<h2>Inset listviews</h2>

			<h3>Read-only</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li>Acura</li>
					<li>Audi <span class="ui-li-count">3</span></li>
					<li>BMW <span class="ui-li-count">2</span></li>
					<li>Cadillac</li>
					<li>Ferrari <span class="ui-li-count">1</span></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Read-only, ordered</h3>

			<div data-demo-html="true">
				<ol data-role="listview" data-inset="true">
					<li>Acura</li>
					<li>Audi</li>
					<li>BMW</li>
					<li>Cadillac</li>
					<li>Ferrari</li>
				</ol>
			</div><!--/demo-html -->

			<h3>Linked</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li><a href="#">Acura</a></li>
					<li><a href="#">Audi</a></li>
					<li><a href="#">BMW</a></li>
					<li><a href="#">Cadillac</a></li>
					<li><a href="#">Ferrari</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Linked, ordered</h3>

			<div data-demo-html="true">
				<ol data-role="listview" data-inset="true">
					<li><a href="#">The Godfather</a></li>
					<li><a href="#">Inception</a></li>
					<li><a href="#">The Good, the Bad and the Ugly </a></li>
					<li><a href="#">Pulp Fiction</a></li>
					<li><a href="#">Schindler's List</a></li>
				</ol>
			</div><!--/demo-html -->
			
			<h3>Count bubbles</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true" data-count-theme="e">
					<li><a href="#">Inbox <span class="ui-li-count">12</span></a></li>
					<li><a href="#">Outbox <span class="ui-li-count">0</span></a></li>
					<li><a href="#">Drafts <span class="ui-li-count">4</span></a></li>
					<li><a href="#">Sent <span class="ui-li-count">328</span></a></li>
					<li><a href="#">Trash <span class="ui-li-count">62</span></a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Divider, count bubbles, split buttons</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true" data-divider-theme="d" data-split-theme="e" data-split-icon="grid">
					<li data-role="list-divider">Mail</li>
					<li><a href="#">Inbox <span class="ui-li-count">12</span></a><a href="#">Click me</a></li>
					<li><a href="#">Outbox <span class="ui-li-count">0</span></a><a href="#">Click me</a></li>
					<li><a href="#">Drafts <span class="ui-li-count">4</span></a><a href="#">Click me</a></li>
					<li><a href="#">Sent <span class="ui-li-count">328</span></a><a href="#">Click me</a></li>
					<li><a href="#">Trash <span class="ui-li-count">62</span></a><a href="#">Click me</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Nested</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true" data-header-theme="e">
					<li>Animals
						<ul>
							<li>Pets
								<ul>
									<li><a href="index.html">Canary</a></li>
									<li><a href="index.html">Cat</a></li>
									<li><a href="index.html">Dog</a></li>
								</ul>
							</li>
							<li>Farm animals
								<ul>
									<li><a href="index.html">Chicken</a></li>
									<li><a href="index.html">Cow</a></li>
									<li><a href="index.html">Sheep</a></li>
								</ul>
							</li>
							<li>Wild animals>
								<ul>
									<li><a href="index.html">Alligator</a></li>
									<li><a href="index.html">Bear</a></li>
									<li><a href="index.html">Zebra</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>Colors
						<ul>
							<li><a href="index.html">Blue</a></li>
							<li><a href="index.html">Green</a></li>
							<li><a href="index.html">Red</a></li>
						</ul>
					</li>
					<li>Vehicles
						<ul>
							<li>Cars
								<ul>
									<li><a href="index.html">Audi</a></li>
									<li><a href="index.html">BMW</a></li>
									<li><a href="index.html">Volkswagon</a></li>
								</ul>
							</li>
							<li>Planes
								<ul>
									<li><a href="index.html">Boeing</a></li>
									<li><a href="index.html">Embraer</a></li>
									<li><a href="index.html">Airbus</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div><!--/demo-html -->

			<h3>Divided, formatted content</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
					<li><a href="index.html">
						<h3>Stephen Weber</h3>
						<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
						<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
						<p class="ui-li-aside"><strong>6:24</strong>PM</p>
					</a></li>
					<li><a href="index.html">
						<h3>jQuery Team</h3>
						<p><strong>Boston Conference Planning</strong></p>
						<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
						<p class="ui-li-aside"><strong>9:18</strong>AM</p>
					</a></li>
					<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
					<li><a href="index.html">
						<h3>Avery Walker</h3>
						<p><strong>Re: Dinner Tonight</strong></p>
						<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
						<p class="ui-li-aside"><strong>4:48</strong>PM</p>
					</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Icon, count bubbles</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li><a href="#"><img src="../../_assets/img/gf.png" alt="France" class="ui-li-icon ui-corner-none">France <span class="ui-li-count">4</span></a></li>
					<li><a href="#"><img src="../../_assets/img/de.png" alt="Germany" class="ui-li-icon">Germany <span class="ui-li-count">4</span></a></li>
					<li><a href="#"><img src="../../_assets/img/gb.png" alt="Great Britain" class="ui-li-icon">Great Britain <span class="ui-li-count">0</span></a></li>
					<li><a href="#"><img src="../../_assets/img/fi.png" alt="Finland" class="ui-li-icon">Finland <span class="ui-li-count">12</span></a></li>
					<li><a href="#"><img src="../../_assets/img/us.png" alt="United States" class="ui-li-icon ui-corner-none">United States <span class="ui-li-count">62</span></a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Thumbnail, split buttons</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li><a href="#">
						<img src="../../_assets/img/album-bb.jpg" />
						<h3>Broken Bells</h3>
						<p>Broken Bells</p></a>
						<a href="#">Purchase album</a>
					</li>
					<li><a href="#">
						<img src="../../_assets/img/album-hc.jpg" />
						<h3>Warning</h3>
						<p>Hot Chip</p></a>
						<a href="#">Purchase album</a>
					</li>
					<li><a href="#">
						<img src="../../_assets/img/album-p.jpg" />
						<h3>Wolfgang Amadeus Phoenix</h3>
						<p>Phoenix</p></a>
						<a href="#">Purchase album</a>
					</li>
				</ul>
			</div><!--/demo-html -->

		
	
	</div><!-- /content -->
	
	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->
	
</div><!-- /page -->
</body>
</html>
