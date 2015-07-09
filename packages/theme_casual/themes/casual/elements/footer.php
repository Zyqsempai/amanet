<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
             &copy; <?php  echo date('Y')?> <?php  echo h(SITE)?>.
            </div>
            <div class="col-xs-6">
              <?php 
                $a = new GlobalArea('Footer Content');
                $a->display();
              ?>
            </div>
          </div>
        </div>
      </section>