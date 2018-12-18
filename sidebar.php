<aside class="sidebar">
  <h2>Sidebar</h2>
  <div class="widget-block">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ol>
  </div>

  <div class="widget-block">
    <h4>About</h4>
    <p><?php the_author_meta( 'description' ); ?> </p>
  </div>

  <div class="widget-block">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
	</div>

</aside>