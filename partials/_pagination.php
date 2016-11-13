<div class="pagination">
  <div class="pagination--links">
    <a href="/problems/" class="pagination--first"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
    <a href="?page=1" class="pagination--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    <a href="?page=1" class="pagination--number">1</a>
    <span class="pagination--number pagination--active">2</span>
    <a href="?page=3" class="pagination--number">3</a>
    <a href="?page=4" class="pagination--number">4</a>
    <a href="?page=5" class="pagination--number">5</a>
    <a href="?page=3" class="pagination--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    <a href="?page=9" class="pagination--last"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  </div>
  <?php if (isset($total)): ?>
    <div class="pagination--results">
      <p>Showing 21-40 of <?php echo $total; ?></p>
    </div>
  <?php endif; ?>
</div>
