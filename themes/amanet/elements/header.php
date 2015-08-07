<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php  echo LANGUAGE;?>">
  <head>
    <?php  Loader::element('header_required'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="<?php  echo $this->getStyleSheet('css/bootstrap.css')?>" rel="stylesheet">

    <link href="<?php  echo $this->getStyleSheet('typography.css')?>" rel="stylesheet">
    <link href="<?php  echo $this->getStyleSheet('main.css')?>" rel="stylesheet">
      <!--Start of Zopim Live Chat Script-->
      <script type="text/javascript">
          window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
              d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
              _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
              $.src="//v2.zopim.com/?3CrH7oko3D1YNLn3a97sXBVoKoDQcPWD";z.t=+new Date;$.
                  type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
      </script>
      <!--End of Zopim Live Chat Script-->
  </head>