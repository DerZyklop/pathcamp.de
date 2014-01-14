<?php if(!defined('KIRBY')) exit ?>

# blogarticle blueprint

title: Blogarticle
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
  autor: 
    label: Autor
    type:  text
  date: 
    label: Date
    type:  date