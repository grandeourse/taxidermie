<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: 
  template:
    - featured_services
    - featured_produits
    - cta
    - section
fields:
  title:
    label: Title
    type:  text
  banner:
    extends: banner