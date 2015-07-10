<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div id="logo">
              <?php 
                $a = new GlobalArea('Site Name');
                $a->display();
              ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div id="contactd">
              <span>
              <?php 
                $a = new GlobalArea('Contact Label');
                $a->display();
              ?>
              </span>
              <span>
              <?php 
                $a = new GlobalArea('Contact Number');
                $a->display();
              ?>
              </span>
            </div>
          </div>
        </div>
      </div>
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