<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages:
  template: default
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
