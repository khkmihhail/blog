<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 19.03.2018
 * Time: 12:08
 */

namespace App;


class comments extends Controller
{
    function index(){
        $this->comments =get_all("Select comment_id,post_comment, count(post_id) 
        as counter 
        From comments NATURAL JOIN post 
        GROUP BY comment_id");
    }

    function view(){
        $_comments = get_all("select * from comments NATURAL JOIN post");

        foreach ($_comments as $comment) {
            $this->comments[$comment['post_id']][] = $comment['post_comment'];
        };
    }
}