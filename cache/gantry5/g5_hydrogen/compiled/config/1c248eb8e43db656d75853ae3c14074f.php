<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1571189256,
    'checksum' => 'c1fae1931dd07c68d7e9d03a03754e15',
    'files' => [
        'templates/g5_hydrogen/custom/config/15' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/index.yaml',
                'modified' => 1571187759
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/layout.yaml',
                'modified' => 1571187759
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/styles.yaml',
                'modified' => 1571189252
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1571187759
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1571187759
            ],
            'particles/branding' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/branding.yaml',
                'modified' => 1571023987
            ],
            'particles/content' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/content.yaml',
                'modified' => 1571023987
            ],
            'particles/contentarray' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/contentarray.yaml',
                'modified' => 1571023987
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/copyright.yaml',
                'modified' => 1571023987
            ],
            'particles/custom' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/custom.yaml',
                'modified' => 1571023987
            ],
            'particles/date' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/date.yaml',
                'modified' => 1571023987
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/logo.yaml',
                'modified' => 1571023987
            ],
            'particles/menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/menu.yaml',
                'modified' => 1571023987
            ],
            'particles/messages' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/messages.yaml',
                'modified' => 1571023987
            ],
            'particles/mobile-menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/mobile-menu.yaml',
                'modified' => 1571023987
            ],
            'particles/module' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/module.yaml',
                'modified' => 1571023987
            ],
            'particles/position' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/position.yaml',
                'modified' => 1571023987
            ],
            'particles/sample' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/sample.yaml',
                'modified' => 1571023987
            ],
            'particles/social' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/social.yaml',
                'modified' => 1571023987
            ],
            'particles/spacer' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/spacer.yaml',
                'modified' => 1571023987
            ],
            'particles/totop' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/totop.yaml',
                'modified' => 1571023987
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/styles.yaml',
                'modified' => 1571188323
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1571022858
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'owner' => ''
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => '1',
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => 'gantry-media://banners/logo2_1.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo',
                'height' => '',
                'svg' => ''
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => '1',
                'menu' => '',
                'base' => '/',
                'startLevel' => '1',
                'maxLevels' => '0',
                'renderTitles' => '0',
                'hoverExpand' => '1',
                'mobileTarget' => '0',
                'forceTarget' => '0'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both',
                'title' => '',
                'items' => [
                    
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'totop'
                ],
                'icon' => '',
                'content' => ''
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => '1'
            ],
            'contentarray' => [
                'enabled' => '1',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => '0'
                        ],
                        'edit' => '0',
                        'title' => [
                            'enabled' => 'show',
                            'limit' => ''
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show',
                            'label' => '',
                            'css' => ''
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ],
                'css' => [
                    'class' => ''
                ],
                'extra' => [
                    
                ]
            ],
            'date' => [
                'enabled' => '1',
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => '1'
            ],
            'module' => [
                'enabled' => '1',
                'chrome' => ''
            ],
            'position' => [
                'enabled' => '1',
                'chrome' => ''
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#bf383a',
                'color-2' => '#757575'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#a61f21',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#d6d6d6',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-zoom',
                'hide-on-mobile' => '0'
            ],
            'navigation' => [
                'background' => '#bf383a',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#722829',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#722829',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset4'
        ],
        'index' => [
            'name' => 15,
            'timestamp' => 1571187759,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1571022858
            ],
            'positions' => [
                'header' => 'Header',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-1015' => 'Logo'
                ],
                'position' => [
                    'position-header' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'menu' => [
                    'menu-8828' => 'Menu'
                ],
                'messages' => [
                    'system-messages-8589' => 'System Messages'
                ],
                'content' => [
                    'system-content-6157' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-2091' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-5488' => 'Spacer'
                ],
                'branding' => [
                    'branding-2251' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-2616' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'main' => 'main',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'logo-1015' => 'logo-1015',
                    'position-header' => 'position-header',
                    'menu-8828' => 'menu-5166',
                    'position-breadcrumbs' => 'position-breadcrumbs',
                    'system-messages-8589' => 'system-messages-8589',
                    'system-content-6157' => 'system-content-6157',
                    'position-footer' => 'position-footer',
                    'copyright-2091' => 'copyright-2091',
                    'spacer-5488' => 'spacer-5488',
                    'branding-2251' => 'branding-2251',
                    'mobile-menu-2616' => 'mobile-menu-2616'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1571022858
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'main' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'key' => 'header'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
