<?php if(!defined('KIRBY')) exit ?>

# location blueprint

title: Location
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
    buttons:
      - h1
      - h2
      - h3
      - bold
      - italic
      - email
      - link
  address: 
    label: Adresse
    type: text
