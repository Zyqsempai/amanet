<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
  <body>
    <header>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <?php
                    $a = new Area('Main');
                    $a->display($c);
                    ?>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
      <?php  Loader::element('footer_required'); ?>
    </body>
  </html>