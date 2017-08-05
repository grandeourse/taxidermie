<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: 
	template:
		- banner
		- section
		- cta
files: true
fields:
  title:
    label: Titre
    type:  text
  subtitle:
    label: Sous titre
    type:  text
  text:
    label: Texte
    type:  textarea