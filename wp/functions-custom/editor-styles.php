<?php

        //STYLES IN EDITOR-WIND
        function my_theme_add_editor_styles() {
            add_editor_style( 'css/custom-editor-style.css' );
        }
        add_action( 'init', 'my_theme_add_editor_styles' );

        //CUSTOM DASHBOARD STYLES
        function my_custom_dashboard() {
          echo '<style>
            .acf-flexible-content .layout {
                border-top: 2px solid #333;
            }

            .acf-flexible-content .layout .acf-fc-layout-order {
                background: #fff;
                color: #333;
            }

            .acf-flexible-content .layout .acf-fc-layout-handle {
                color: #fff;
                background-color: #333;
            }

            .acf-flexible-content .layout {
                border: 1px solid #333;
            }

            .acf-flexible-content .layout .layout {
                border-top: 2px solid #aaa;
            }

            .acf-flexible-content .layout .layout .acf-fc-layout-order {
                background: #aaa;
                color: #333;
            }

            .acf-flexible-content .layout .layout .acf-fc-layout-handle {
                color: #333;
                background-color: #aaa;
            }

            .acf-flexible-content .layout .layout {
                border: 1px solid #aaa;
            }
          </style>';
        }
        add_action('admin_head', 'my_custom_dashboard');

 ?>