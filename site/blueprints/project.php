<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  skill_areas:
    label: Skill Areas
    type: text
  short_descr:
    label: Short Description
    type: text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags