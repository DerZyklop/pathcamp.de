<?php if(!defined('KIRBY')) exit ?>

# support blueprint

title: Support
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
filefields:
  caption:
    label: Caption
    type:  text
  link:
    label: link
    type: text
