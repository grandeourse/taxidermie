<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template:
    - default
    - entreprise
    - services
    - produits
    - contact
fields:
  title:
    label: Titre
    type:  text
  author:
    label: Auteur
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Mots clés
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  logo:
    label: Logo
    type:  image
  icon:
    label: Icon
    type:  image