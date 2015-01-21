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
        $project = new Model_Project();
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

    public function validateRegistrationRequest()
    {
        $email1 = $_POST['email'];
        $email2 = $_POST['email2'];
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password2'];

        if ($email1 != $email2)
        {
            return "Your email adresses did not match!";
        }

        if ($pass1 != $pass2)
        {
            return "Your passwords did not match!";
        }

        $existing = R::find('user','email like ?', [$email1]);
        $existing = array_filter($existing);

        if (!empty($existing))
        {
            return "Email adress already registered";
        }

        return true;
    }

    public function registrationPage()
    {
        if(!isset($_POST['submit']))
        {
            return View::make('register')->set([
                'title' => 'Tinkart',
                'heading' => 'global ideas for everyone ',
                'error' => false
            ]);
        }

        if($result = $this->validateRegistrationRequest() === true)
        {
            $newUser = R::dispense('user');
            $newUser->email = $_POST['email'];
            $newUser->firstname = $_POST['firstname'];
            $newUser->lastname = $_POST['lastname'];
            $newUser->username = $_POST['username'];
            $id = R::store($newUser);

            return View::make('register_success')->set([
                'title' => 'Tinkart',
                'heading' => 'global ideas for everyone ',
            ]);
        }
        else
        {
            return View::make('register')->set([
                'title' => 'Tinkart',
                'heading' => 'global ideas for everyone ',
                'error' => $result
            ]);
        }

        //


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