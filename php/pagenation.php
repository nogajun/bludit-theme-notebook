<?php if (Paginator::numberOfPages() > 1) : ?>
  <nav class="paginator text-center m-4">
    <ul class="pagination justify-content-center">
      <!-- Previous button -->
      <?php if (Paginator::showPrev()) : ?>
        <li class="page-item">
          <a class="page-link text-dark" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
        </li>
      <?php endif; ?>
      <!-- Next button -->
      <?php if (Paginator::showNext()) : ?>
        <li class="page-item">
          <a class="page-link text-dark" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif ?>