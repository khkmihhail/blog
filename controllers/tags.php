<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 16.03.2018
 * Time: 12:16
 */

namespace App;


class tags extends Controller
{

    function index(){
        $this->tags =get_all("Select tag_name, count(post_id) 
        as counter 
        From posts_tags NATURAL JOIN tags 
        GROUP BY tag_id");
    }

    function view(){
        $_tags = get_all("select * from posts_tags NATURAL JOIN tags");

        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
        };
    }


}