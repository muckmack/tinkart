<?php

session_start();

class Controller {

    public function display($query)
    {
        $layout = View::make('layout');

        switch($query)
        {
            case '':
                echo $layout->set('title', 'Tinkart')->set('content', $this->index());
                break;

            case '/projectpage':
                echo $layout->set('title', 'Tinkart - Project')->set('content', $this->projectpage());
                break;

            case '/register':
                echo $layout->set('title', 'Registration')->set('content', $this->registrationPage());
                break;
            case '/searchresult':
                echo $layout->set('title', 'Searchresults')->set('content', $this->searchresults());
                break;

            case '/create-project':
                echo $layout->set('title', 'Project Creator')->set('content', $this->createProject());
                break;


            default:
                echo '404 Diese Seite wurde nicht gefunden';
                break;
        }
    }

    public function index()
    {
        $project = new Project();
        //$comments = new Comment();

        $projects = $project->all();

        foreach ($projects as &$pro)
        {
           // $pro['description'] = 'blub';
            //$pro['comments'] = $comments->allByProject($pro['id']);
        }

        return View::make('startseite')->set([
                'title' => 'Tinkart',
                'heading' => 'global ideas for everyone ',
                'projects' => $projects
            ]);
    }

    public function projectPage()
    {
        return View::make('projectpage');
    }
    public function registrationPage()
    {
        return View::make('register');
    }
    public function searchresults()
    {
        return View::make('searchresult');
    }
    public function createProject()
    {
        return View::make('create-project');
    }

} 