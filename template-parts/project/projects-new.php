<style>

	[color='red'] > * { background: #f0506e; }
	[color='green'] > * { background: #32d296; }
	[color='blue'] > * { background: #1e87f0; }

	[size='small'] > * { height: 210px; }
	[size='medium'] > * { height: 280px; }
	[size='large'] > * { height: 350px; }

</style>

<script>

	var util = UIkit.util;

	util.ready(function () {

		util.on(document.body, 'beforeFilter afterFilter', function (e, filter, state) {
			console.log(e.type, filter, state);
		});

	});

</script>

<div class="uk-container">

	<h1>Filter</h1>

	<div uk-filter="target: .js-filter; animation: 2000">

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Default</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control><a href="#">All</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="[color='red']"><a href="#">Red</a></li>
					<li uk-filter-control="[color='green']"><a href="#">Green</a></li>
					<li uk-filter-control="[color='blue']"><a href="#">Blue</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="[size='small']"><a href="#">Small</a></li>
					<li uk-filter-control="[size='medium']"><a href="#">Medium</a></li>
					<li uk-filter-control="[size='large']"><a href="#">Large</a></li>
				</ul>

			</div>
		</div>

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Group</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control><a href="#">All</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="filter: [color='red']; group: color"><a href="#">Red</a></li>
					<li uk-filter-control="filter: [color='green']; group: color"><a href="#">Green</a></li>
					<li uk-filter-control="filter: [color='blue']; group: color"><a href="#">Blue</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="filter: [size='small']; group: size"><a href="#">Small</a></li>
					<li uk-filter-control="filter: [size='medium']; group: size"><a href="#">Medium</a></li>
					<li uk-filter-control="filter: [size='large']; group: size"><a href="#">Large</a></li>
				</ul>

			</div>
		</div>

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Alphabetic Order</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li class="uk-active" uk-filter-control="sort: date"><a href="#">Date Asc</a></li>
					<li uk-filter-control="sort: date; order: desc"><a href="#">Date Desc</a></li>
					<li uk-filter-control="sort: color"><a href="#">Color Asc</a></li>
					<li uk-filter-control="sort: color; order: desc"><a href="#">Color Desc</a></li>
					<li uk-filter-control="sort: size"><a href="#">Size Asc</a></li>
					<li uk-filter-control="sort: size; order: desc"><a href="#">Size Desc</a></li>
				</ul>

			</div>
		</div>

		<ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-light" uk-grid="masonry: true">
			<li color="blue" size="large" date="2016-06-01"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">1</div></li>
			<li color="red" size="small" date="2016-12-13"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">2</div></li>
			<li color="blue" size="medium" date="2017-05-20"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">3</div></li>
			<li color="blue" size="small" date="2017-09-17"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">4</div></li>
			<li color="green" size="medium" date="2017-11-03"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">5</div></li>
			<li color="green" size="small" date="2017-12-25"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">6</div></li>
			<li color="red" size="medium" date="2018-01-30"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">7</div></li>
			<li color="green" size="large" date="2018-02-01"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">8</div></li>
			<li color="red" size="large" date="2018-03-11"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">9</div></li>
			<li color="blue" size="large" date="2018-06-13"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">10</div></li>
			<li color="red" size="medium" date="2018-10-27"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">11</div></li>
			<li color="green" size="small" date="2018-12-02"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">12</div></li>
		</ul>

	</div>

	<h2>With Parallax</h2>

	<div uk-filter="target: .js-filter">

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Default</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control><a href="#">All</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="[color='red']"><a href="#">Red</a></li>
					<li uk-filter-control="[color='green']"><a href="#">Green</a></li>
					<li uk-filter-control="[color='blue']"><a href="#">Blue</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="[size='small']"><a href="#">Small</a></li>
					<li uk-filter-control="[size='medium']"><a href="#">Medium</a></li>
					<li uk-filter-control="[size='large']"><a href="#">Large</a></li>
				</ul>

			</div>
		</div>

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Group</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control><a href="#">All</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="filter: [color='red']; group: color"><a href="#">Red</a></li>
					<li uk-filter-control="filter: [color='green']; group: color"><a href="#">Green</a></li>
					<li uk-filter-control="filter: [color='blue']; group: color"><a href="#">Blue</a></li>
				</ul>

			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control="filter: [size='small']; group: size"><a href="#">Small</a></li>
					<li uk-filter-control="filter: [size='medium']; group: size"><a href="#">Medium</a></li>
					<li uk-filter-control="filter: [size='large']; group: size"><a href="#">Large</a></li>
				</ul>

			</div>
		</div>

		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
			<h3>Alphabetic Order</h3>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li class="uk-active" uk-filter-control="sort: date"><a href="#">Date Asc</a></li>
					<li uk-filter-control="sort: date; order: desc"><a href="#">Date Desc</a></li>
					<li uk-filter-control="sort: color"><a href="#">Color Asc</a></li>
					<li uk-filter-control="sort: color; order: desc"><a href="#">Color Desc</a></li>
					<li uk-filter-control="sort: size"><a href="#">Size Asc</a></li>
					<li uk-filter-control="sort: size; order: desc"><a href="#">Size Desc</a></li>
				</ul>

			</div>
		</div>

		<ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m uk-light" uk-grid="masonry: true; parallax: 200">
			<li color="blue" size="large" date="2016-06-01"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">1</div></li>
			<li color="red" size="small" date="2016-12-13"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">2</div></li>
			<li color="blue" size="medium" date="2017-05-20"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">3</div></li>
			<li color="blue" size="small" date="2017-09-17"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">4</div></li>
			<li color="green" size="medium" date="2017-11-03"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">5</div></li>
			<li color="green" size="small" date="2017-12-25"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">6</div></li>
			<li color="red" size="medium" date="2018-01-30"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">7</div></li>
			<li color="green" size="large" date="2018-02-01"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">8</div></li>
			<li color="red" size="large" date="2018-03-11"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">9</div></li>
			<li color="blue" size="large" date="2018-06-13"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">10</div></li>
			<li color="red" size="medium" date="2018-10-27"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">11</div></li>
			<li color="green" size="small" date="2018-12-02"><div class="uk-panel uk-flex uk-flex-center uk-flex-middle uk-h2">12</div></li>
		</ul>

	</div>

</div>