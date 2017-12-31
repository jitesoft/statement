<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  routes.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/** @var $app \Slim\App */

use Jitesoft\Statement\Controllers\API\CommentController;

$app->get('/', function() {
    return 'version 1.0.0';
});

$app->group('/api/v1', function() {
    /** @var $this \Slim\App */
    $this->group('/site/{id}', function() {
        /** @var $this \Slim\App */
        $this->get('/comment/{c_id}', CommentController::class. ':getComment');
        $this->get('/comments', CommentController::class. ':getComments');
        $this->post('/comment[/{c_id}]', CommentController::class. ':postComment');
        $this->put('/comment/{c_id}', CommentController::class. ':putComment');
        $this->delete('/comment/{c_id}', CommentController::class. ':deleteComment');
    });
});





