<?php

return array(
    array(
        'type'      => 'group',
        'repeating' => false,
        'length'    => 1,
        'name'      => 'cg',
        'title'     => 'Color',
        'fields'    => array(
            array(
                'type' => 'color',
                'name' => 'cp',
                'label' => 'Colorpicker',
                'description' => 'Pick color or insert color as hex value.',
                'default' => '#EEEEEE',
                'format' => 'hex',
            ), 
        ),
        'dependency' => $fpbgTypeColorDependency,
    ),
);