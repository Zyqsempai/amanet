<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
  <body>
    <header>
    </header>
    <section class="banner">
      <div class="container">
        <?php 
          $a = new Area('Header Image');
          $a->display($c);
        ?>
      </div>
    </section>
    <div class="container">
        <div class="masthead">
            <?php
            $a = new GlobalArea('Header Nav');
            $a->display();
            ?>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="content">
            <?php 
              $a = new Area('Main');
              $a->display($c);
            ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sidecontent">
            <?php 
              $a = new Area('Sidebar');
              $a->display($c);
            ?>
          </div>
        </div>
      </div>
      </div> <!-- /container -->
      <section class="prefoot">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="tridiv">
                 <?php 
                    $a = new GlobalArea('Prefooter 1');
                    $a->display();
                  ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tridiv">
                <?php 
                    $a = new GlobalArea('Prefooter 2');
                    $a->display();
                  ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tridiv">
                <?php 
                    $a = new GlobalArea('Prefooter 3');
                    $a->display();
                  ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php  $this->inc('elements/footer.php'); ?>
      <?php  Loader::element('footer_required'); ?>
    </body>
  </html>