<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  CommentController.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace Jitesoft\Statement\Controllers\API;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CommentController extends ApiController {

    public function getComments(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {
        return $response->getBody()->write('Hi.');
    }

    public function getComment(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {

    }

    public function getCommentThread(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {

    }

    public function postComment(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {

    }

    public function putComment(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {

    }

    public function deleteComment(ServerRequestInterface $request, ResponseInterface $response, array $arguments) {

    }

}
