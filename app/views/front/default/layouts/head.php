<!DOCTYPE html>
<html lang="<?php echo language_code() ?>">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="site_url" content="<?php _u(''); ?>">
        
        <meta name="description" content="<?php echo (isset($meta_description)) ? $meta_description : AZ::setting('global_meta_description'); ?>">
        <meta name="keywords" content="<?php echo (isset($meta_keywords)) ? $meta_keywords : AZ::setting('global_meta_keywords'); ?>">
		
		<link rel="shortcut icon" href="<?= skin_url(); ?>images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?= skin_url(); ?>images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" href="<?= skin_url(); ?>images/apple-touch-icon.png" sizes="144x79">

        <link rel="stylesheet"  href="<?= skin_url(); ?>css/bootstrap.min.css"  />
        <link rel="stylesheet"  href="<?= skin_url(); ?>css/style.css"  />
        
        <?php
        if (isset($styles)) {
            load_styles($styles);
        }
        ?>

        <script src="<?= skin_url(); ?>scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="<?= skin_url(); ?>scripts/bootstrap.min.js" type="text/javascript"></script>
        <?php
        
        if (isset($scripts)) {
            echo load_scripts($scripts);
        }
        
        ?>
        
        <title> <?php echo page_title((isset($page_title)) ? $page_title : AZ::setting('global_meta_title')); ?> </title>
        
    </head>

    <body class="<?php echo page_class(); ?>">