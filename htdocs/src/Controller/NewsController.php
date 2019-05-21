<?php

namespace App\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Respect\Validation\Validator as V;

class NewsController
{
    /** @var \Slim\Views\Twig  */
    private $view;

    /** @var \Psr\Log\LoggerInterface  */
    private $logger;

    /** @var \Illuminate\Database\Capsule\Manager  */
    protected $db;

    public function __construct($view, $logger, $db)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->db = $db;
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param $argument
     *
     * @return ResponseInterface
     */
    public function __invoke($request, $response, $argument)
    {
        return $this->view->render($response, 'news/index.twig');
    }
}