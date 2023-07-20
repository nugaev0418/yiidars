<?php

/**
 * @var $data \frontend\models\MyModel
 */

use yii\bootstrap5\LinkPager;

?>

<div class="container">
    <h1>Post list</h1>
    <a href="/post/create" class="btn btn-success">Post qo'shish</a>
    <div class="row my-3">
        <form class="d-flex" method="get">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col"><?= $provider->sort->link('title'); ?></th>
            <th scope="col"><?= $provider->sort->link('body'); ?></th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($provider->getModels() as $post):?>

            <tr>
                <th scope="row"><?= $post['id'];?></th>
                <td><?= $post['title'];?></td>
<!--                <td>--><?php //= $post->category->name;?><!--</td>-->
<!--                <td>--><?php //= $post->title;?><!--</td>-->
<!--                <td>--><?php //= $post->body;?><!--</td>-->
                <td>
                    <a href="/post/view/?id=<?= $post['id'];?>" class="btn btn-info">View</a>
                    <a href="/post/edit/?id=<?= $post['id'];?>" class="btn btn-primary">Update</a>
                    <a href="/post/delete/?id=<?= $post['id'];?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <?php
        echo LinkPager::widget([
            'pagination' => $provider->pagination,
            'maxButtonCount' => 3
        ]);
    ?>
</div>
