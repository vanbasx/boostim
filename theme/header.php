<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('h-full'); ?>>
  <div class="min-h-full flex flex-col">
    <header></header>
    <main class="flex-auto">