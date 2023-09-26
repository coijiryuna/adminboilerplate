 <?php

    return [
        'global' => [
            'form'   => 'Form',
            'add'    => 'Add',
            'edit'   => 'Edit',
            'save'   => 'Save',
            'close'  => 'Close',
            'delete' => 'Delete',
            'action' => 'Action',
            'update' => 'Update',
            'logout' => 'Logout',
            'back'   => 'Back',
            'reset'  => 'Reset',
            'show'   => 'Show',
            'view'   => 'View',
            'max'    => 'The maximum size of the image',
            'image'  => 'Image',
            'print'  => 'Print',
            'printall'  => 'Print All',
            'setting' => 'Setting',
            'sweet'  => [
                'title'          => 'Are you sure?',
                'text'           => "You won't be able to revert this!",
                'confirm_delete' => 'Yes, delete it!',
                'insert'         => 'The data has been correctly added.',
                'update'         => 'The data has been correctly modified.',
                'delete'         => 'The data has been correctly deleted.',
                'error'          => 'The data failed to insert',
                'fail'           => 'The data not found or already deleted.',
                'get'            => 'The data has been successfully get.'
            ],
            'msg' => [
                'msg_insert'   => 'The data has been correctly added.',
                'msg_update'   => 'The data id {0} has been correctly modified.',
                'msg_delete'   => 'The data id {0} has been correctly deleted.',
                'msg_get'      => 'The data id {0} has been successfully get.',
                'msg_get_fail' => 'The data id {0} not found or already deleted.',
            ],
        ],

        /**
         * Permission.
         */
        'permission' => [
            'add'      => 'Add permission',
            'edit'     => 'Edit permission',
            'title'    => 'Permission management',
            'subtitle' => 'Permission list',
            'fields'   => [
                'name'            => 'Permission',
                'description'     => 'Description',
                'plc_name'        => 'Name of permission',
                'plc_description' => 'Description for permission',
            ],
            'msg' => [
                'msg_insert'   => 'The permission has been correctly added.',
                'msg_update'   => 'The permission id {0} has been correctly modified.',
                'msg_delete'   => 'The permission id {0} has been correctly deleted.',
                'msg_get'      => 'The permission id {0} has been successfully get.',
                'msg_get_fail' => 'The permission id {0} not found or already deleted.',
            ],
        ],

        /**
         * Role.
         */
        'role' => [
            'add'      => 'Add role',
            'edit'     => 'Edit role',
            'title'    => 'Role management',
            'subtitle' => 'Role list',
            'fields'   => [
                'name'            => 'Role',
                'description'     => 'Description',
                'plc_name'        => 'Name of role',
                'plc_description' => 'Description for role',
            ],
            'msg' => [
                'msg_insert'   => 'The role has been correctly added.',
                'msg_update'   => 'The role id {0} has been correctly modified.',
                'msg_delete'   => 'The role id {0} has been correctly deleted.',
                'msg_get'      => 'The role id {0} has been successfully get.',
                'msg_get_fail' => 'The role id {0} not found or already deleted.',
            ],
        ],

        /**
         * Menu.
         */
        'menu' => [
            'expand'   => 'Expand',
            'collapse' => 'Collapse',
            'refresh'  => 'Refresh',
            'add'      => 'Add menu',
            'edit'     => 'Edit menu',
            'title'    => 'Menu management',
            'subtitle' => 'Menu list',
            'fields'   => [
                'parent'         => 'Parent',
                'warning_parent' => 'Please note! the menu only support with max depth 2.',
                'active'         => 'Active',
                'non_active'     => 'Non Active',
                'icon'           => 'Icon',
                'info_icon'      => 'For more icons, please see',
                'place_icon'     => 'Icon from fontawesome.',
                'name'           => 'Title',
                'place_title'    => 'Name for menu.',
                'route'          => 'Route',
                'place_route'    => 'Route for link menu.',
            ],
            'msg' => [
                'msg_insert'     => 'The menu has been correctly added.',
                'msg_update'     => 'The menu has been correctly modified.',
                'msg_delete'     => 'The menu has been correctly deleted.',
                'msg_get'        => 'The menu has been successfully get.',
                'msg_get_fail'   => 'The menu not found or already deleted.',
                'msg_fail_order' => 'The menu failed the reorder.',
            ],
        ],
        /**
         * Navbar.
         */
        'navbar' => [
            'expand'   => 'Expand',
            'collapse' => 'Collapse',
            'refresh'  => 'Refresh',
            'add'      => 'Add Manu',
            'edit'     => 'Edit Manu',
            'title'    => 'Manu management',
            'subtitle' => 'Manu list',
            'fields'   => [
                'parent'         => 'Parent',
                'warning_parent' => 'Please note! the Manu only support with max depth 2.',
                'active'         => 'Active',
                'non_active'     => 'Non Active',
                'icon'           => 'Icon',
                'info_icon'      => 'For more icons, please see',
                'place_icon'     => 'Icon from fontawesome.',
                'name'           => 'Title',
                'place_title'    => 'Name for Manu.',
                'route'          => 'Route',
                'place_route'    => 'Route for link Manu.',
            ],
            'msg' => [
                'msg_insert'     => 'The Manu has been correctly added.',
                'msg_update'     => 'The Manu has been correctly modified.',
                'msg_delete'     => 'The Manu has been correctly deleted.',
                'msg_get'        => 'The Manu has been successfully get.',
                'msg_get_fail'   => 'The Manu not found or already deleted.',
                'msg_fail_order' => 'The Manu failed the reorder.',
            ],
        ],

        /**
         * user.
         */
        'user' => [
            'add'      => 'Add user',
            'edit'     => 'Edit user',
            'title'    => 'User management',
            'subtitle' => 'User list',
            'fields'   => [
                'active'          => 'Active',
                'profile'         => 'Profile',
                'join'            => 'Member since',
                'setting'         => 'Setting',
                'non_active'      => 'Non Active',
            ],
            'msg' => [
                'msg_insert'   => 'The user has been correctly added.',
                'msg_ready'    => 'The user are ready registered.',
                'msg_update'   => 'The user has been correctly modified.',
                'msg_delete'   => 'The user has been correctly deleted.',
                'msg_get'      => 'The user has been successfully get.',
                'msg_get_fail' => 'The user not found or already deleted.',
            ],
        ],
        /**
         * Website.
         */
        'news' => [
            'add'      => 'Add News',
            'edit'     => 'Edit News',
            'title'    => 'News management',
            'subtitle' => 'News list',
            'summary'  => 'News Summary',
            'fields'   => [
                'title'          => 'News Title',
                'status'         => 'Status',
                'create'         => 'Date',
            ],
            'msg' => [
                'msg_insert'   => 'The News has been correctly added.',
                'msg_update'   => 'The News has been correctly modified.',
                'msg_delete'   => 'The News has been correctly deleted.',
                'msg_get'      => 'The News has been successfully get.',
                'msg_get_fail' => 'The News not found or already deleted.',
            ],
        ],

        'article' => [
            'add'      => 'Add Article',
            'edit'     => 'Edit Article',
            'title'    => 'Article management',
            'subtitle' => 'Article list',
            'fields'   => [
                'title'          => 'Article Title',
                'status'         => 'Status',
                'create'         => 'Date',
            ],
            'msg' => [
                'msg_insert'   => 'The Article has been correctly added.',
                'msg_update'   => 'The Article has been correctly modified.',
                'msg_delete'   => 'The Article has been correctly deleted.',
                'msg_get'      => 'The Article has been successfully get.',
                'msg_get_fail' => 'The Article not found or already deleted.',
            ],
        ],

        'report' => [
            'add'      => 'Add Report',
            'edit'     => 'Edit Report',
            'title'    => 'Report management',
            'subtitle' => 'Report list',
            'fields'   => [
                'title'          => 'Report Title',
                'status'         => 'Status',
                'create'         => 'Date',
            ],
            'msg' => [
                'msg_insert'        => 'The Report has been correctly added.',
                'msg_fail_insert'   => 'The Report has not correctly added.',
                'msg_update'        => 'The Report has been correctly modified.',
                'msg_fail_update'   => 'The Report has not correctly modified.',
                'msg_delete'        => 'The Report has been correctly deleted.',
                'msg_get'           => 'The Report has been successfully get.',
                'msg_get_fail'      => 'The Report not found or already deleted.',
            ],
        ],
    ];
