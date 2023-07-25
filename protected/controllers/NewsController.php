<?php


class NewsController extends Controller
{
    public function actionView($slug){
        if (!empty($slug)){
            $model = News::model()->findByAttributes(array('slug_title' => $slug));

            if (!empty($model)){
                $model->seen_count ++;
                $model->save();
                $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                $commentCount = Comment::model()->countByAttributes(array('news_id' => $model->id));
                $comment = new Comment();
                $recomends = News::model()->findAllByAttributes(array('category_id' => $model->category_id , 'status' => 1));
                $categories = Category::model()->findAllByAttributes(array('status' => 1));
                if (isset($_POST['Comment'])){
                    $comment->attributes = $_POST['Comment'];
                    if ($comment->save()){
                        $this->refresh();
                    }
                }
                return $this->render('view' , [
                    'model' => $model,
                    'category' => $category,
                    'commentCount' => $commentCount,
                    'comment' => $comment,
                    'recomends' => $recomends,
                    'categories' => $categories,
                ]);
            }else{
                return $this->redirect('/site/error');
            }
        }else{
            return $this->redirect('/site/error');
        }
    }

    public function actionCategory($id){
        if (!empty($id)){
            $models = News::model()->findAllByAttributes(array('status' => 1 , 'category_id' => $id));
            $category = Category::model()->findByAttributes(array('id' => $id));
            return $this->render('category' , array(
                'models' => $models,
                'category' => $category,
            ));
        }
    }

    public function actionSearch(){
        $search = $_GET['search'];
        $models = News::model()->findAllBySql("select * from news where title like '%$search%'");
        return $this->render('category' , array(
            'models' => $models,
            'search' => $search
        ));
    }

}