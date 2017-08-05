<?php if(!defined('KIRBY')) exit ?>

title: Section
pages: 
  template:
    - subsection
    - galerie
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
  liencontact:
    label: Bouton de contact
    type: text
    default: Contactez-nous
  lien:
    label: Lien
    type: text
  textlien:
    label: Texte du lien
    type: text
  color: color
  position:
    label: Position du contenu
    type: select
  	options:
  	  left: Gauche
  	  center: Centre
  	  right: Right