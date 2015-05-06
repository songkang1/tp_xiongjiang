<?php

namespace Page\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index($id) {
        $article = M('page')->where(array("callcode='$id'", "lang" => LANG_SET))->select();
        $this->article = $article;
         
        $this->theme("default")->display('Page/index');
    }

}
