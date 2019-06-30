<?php


Kirki::add_section('november_zero_section_ordering', array(
    'title' => __('Section Ordering', 'november-zero'),
    'description' => __('Sorting Sections', 'november-zero'),
    'panel' => 'november_zero_ordering_panel',
    'priority' => 160,
));

Kirki::add_field('november_zero_section_ordering_items', array(
    'type' => 'sortable',
    'settings' => 'november_zero_section_ordering_items',
    'label' => __('Section Ordering', 'november-zero'),
    'section' => 'november_zero_section_ordering',
    'default' => array(
        'about',
        'blog',
        'contact'
    ),
    'choices' => array(
        'about' => __('About', 'november-zero'),
        'features' => __('Features', 'november-zero'),
        'portfolio' => __('Portfolio', 'november-zero'),
        'blog' => __('Blog', 'november-zero'),
        'contact' => __('Contact', 'november-zero'),


    ),
    'priority' => 10,
));

   