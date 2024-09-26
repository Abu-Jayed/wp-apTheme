<?php
/* 
$ this template is for displaying header.
*/

?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<?php wp_head(  ) ?>
</head>

<body <?php body_class(  ) ?> >
  
  <?php wp_footer(  ) ?>
  </body>
  
</html>