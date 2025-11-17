<?php

    function enqueue_parent_styles(){
        wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
    }
    add_action("wp_enqueue_scripts", "enqueue_parent_styles");

    function custom_login(){
        echo "
            <style>
                .login h1 a{
                    visibility:hidden !important;
                }
                body{
                    background-image:url('".get_template_directory_uri()."/loginbg.jpg');
                    background-position:center;
                    background-size:cover;
                    background-repeat:no-repeat;
                }
                a{
                    color:white !important;
                }
            </style>
        ";
    }
    add_action("login_head","custom_login");


    function add_turbolinks(){

        echo "
            <meta name='turbolinks-cache-control' content='no-cache'>

            <script>

                document.addEventListener('turbolinks:click',()=>{
                    document.querySelector('#loader').style.translate = 0
                })
                document.addEventListener('turbolinks:load',()=>{
                    setTimeout(()=>{
                        document.querySelector('#loader').style.translate = '-100%'
                    },1000)
                })

            </script>
        ";

        wp_enqueue_script('turbolinks',get_template_directory_uri()."/turbolinks.min.js");
    }
    add_action("wp_enqueue_scripts","add_turbolinks");