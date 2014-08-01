<!-- Left Sidebar -->
<div class="column-one-third">
	<ul class="social-buttons">
		<a class="social-button-link">
			<li class="social-button social-button-facebook">
		        <span class="icomoon-icon-icon-facebook"></span>
		        <span>シェア</span>
		    </li>
	    </a>
	</ul>
     <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Main Sidebar') ); ?>
</div>
<style type="text/css">
	ul{
		width: 100%;
		padding: 0px;
		margin: 0px;
	}
	.social-button-link > li{
		width: 32%;
		list-style-type: none;
		display: table-cell;
		text-align: center;
		padding-top: 10px;
		border-bottom-style: solid;
		border-bottom-width: 10px;
		border-top-color: #000;
	}

	a > .social-button-facebook{
		color: #FFF;
		background-color: #3b5998;
	}

	a > .social-button-facebook > span.icomoon-icon-icon-facebook{
		font-family: 'icomoon' !important;
		font-size: 28px;
		display: block;
	}

	a > .social-button-facebook　>i{
		display: block;
	}
</style>
<!-- /Left Sidebar -->