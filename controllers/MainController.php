<?php

namespace controllers;

use core\Controller;
use core\Model;
use exceptions\BadDataException;
use exceptions\NotFoundException;
use models\NewsModel;

class MainController extends Controller{

    protected $items_on_page = 10;

    public function index(){
        $page = $this->get['page'] ?? 1;
        $news = NewsModel::findAll($this->items_on_page, $this->items_on_page * ($page - 1));
        $pages_count = intval(ceil(NewsModel::findAll(0, 0, true) / $this->items_on_page));

        if(($page > $pages_count || $page < 0) && count($news) !== 0) {
            throw new NotFoundException();
        }

        return $this->render('news/index', ['news' => $news, 'pages' => $pages_count]);
    }

    public function edit(){
        $id = intval($this->get['id']);
        $news = NewsModel::find('id', $id);
        $news = array_pop($news);

        /**@var Model $news **/

        if($this->getIsPost() === true){
            $title = $this->post['title'];
            $content = $this->post['content'];

            $news->title = htmlspecialchars($title);
            $news->content = htmlspecialchars($content);

            if(empty(trim($this->post['title'])) === true || empty(trim($this->post['content'])) === true){
                throw new BadDataException();
            }

            $news->save();
        }

        return $this->render('news/edit', ['news' => $news]);
    }

    public function delete(){

        if($this->getIsPost() === false){
            throw new NotFoundException();
        }

        $id = $this->get['id'];
        $id = intval($id);

        $news = NewsModel::find('id', $id);
        $news = array_pop($news);

        /**@var Model $news**/

        if(empty($news) === true){
            throw new NotFoundException();
        }else{
            $news->delete();
        }

        return $this->index();
    }

    public function create(){
        if($this->getIsPost() === false){
            return $this->render('news/create', ['news' => new NewsModel()]);
        }else{
            $news = new NewsModel([
                'title' => htmlspecialchars($this->post['title']),
                'content' => htmlspecialchars($this->post['content']),
                'created_at' => date('Y-m-d H:i:s'),
                'admin_id' => 1
            ]);

            if(empty(trim($this->post['title'])) === true || empty(trim($this->post['content'])) === true){
                throw new BadDataException();
            }

            $news->save();

            return $this->index();
        }
    }
}