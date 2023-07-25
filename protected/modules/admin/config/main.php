<?php
return array(
    'modules' => array(
        'admin' => array(
            'components' => array(
                'widgetFactory' => array(
                    'widgets' => array(
                        'AdminHeader' => array(
                            'class' => 'application.modules.admin.widgets.AdminHeader',
                        ),
                        'Aside' => array(
                            'class' => 'application.modules.admin.widgets.Aside',
                        ),
                        'Footer' => array(
                            'class' => 'application.modules.admin.widgets.Footer',
                        ),
                    ),
                ),
            ),
        ),
    ),

);
