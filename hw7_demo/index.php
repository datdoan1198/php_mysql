
<?php 

    $data1 = $_GET;
    $mod = $data1['form'];
    $act = $data1['act'];


    

    switch ($mod) {
        case 'categories':
            require('controllers/categorycontrollers.php');
            $controllers_obj = new categorycontroller();
            switch ($act) {
                case 'list':
                    require_once('banken/header.php');
                    $controllers_obj->list($mod);
                    require_once('banken/footer.php');
                    break;

                case 'detail':
                    require_once('banken/header.php');
                    $controllers_obj->detail($mod); 
                    require_once('banken/footer.php');
                    break;

                case 'add':
                    require_once('banken/header.php');
                    $controllers_obj->add($mod);
                    require_once('banken/footer.php');
                    break;

                case 'addProcess':
                    $controllers_obj->addProcess($mod);
                    break;

                case 'delete':
                    $controllers_obj->delete($mod);
                    break;
                case 'edit':
                    require_once('banken/header.php');
                    $controllers_obj->edit($mod);
                    require_once('banken/footer.php');
                    break;
                case 'editProcess':
                    $controllers_obj->editProcess($mod);
                    break;
                default:
                    echo 'ko ton taiddd ';
                    break;
            }
            break;

        case 'posts':
            require('controllers/categorycontrollers.php');
            $controllers_obj = new categorycontroller();
            switch ($act) {
                case 'list':
                    require_once('banken/header.php');
                    $controllers_obj->list($mod);
                    require_once('banken/footer.php');
                    break;

                case 'detail':
                    require_once('banken/header.php');
                    $controllers_obj->detail($mod); 
                    require_once('banken/footer.php');
                    break;

                case 'add':
                    require_once('banken/header.php');
                    $controllers_obj->add($mod);
                    require_once('banken/footer.php');
                    break;

                case 'addProcess':
                    $controllers_obj->addProcess($mod);
                    break;

                case 'delete':
                    $controllers_obj->delete($mod);
                    break;
                case 'edit':
                    require_once('banken/header.php');
                    $controllers_obj->edit($mod);
                    require_once('banken/footer.php');
                    break;
                case 'editProcess':
                    $controllers_obj->editProcess($mod);
                    break;
                default:
                    echo 'ko ton taiddd ';
                    break;
            }
            break;

         case 'users':
            require('controllers/categorycontrollers.php');
            $controllers_obj = new categorycontroller();
            switch ($act) {
                case 'list':
                    require_once('banken/header.php');
                    $controllers_obj->list($mod);
                    require_once('banken/footer.php');
                    break;

                case 'detail':
                    require_once('banken/header.php');
                    $controllers_obj->detail($mod); 
                    require_once('banken/footer.php');
                    break;

                case 'add':
                    require_once('banken/header.php');
                    $controllers_obj->add($mod);
                    require_once('banken/footer.php');
                    break;

                case 'addProcess':
                    $controllers_obj->addProcess($mod);
                    break;

                case 'delete':
                    $controllers_obj->delete($mod);
                    break;
                case 'edit':
                    require_once('banken/header.php');
                    $controllers_obj->edit($mod);
                    require_once('banken/footer.php');
                    break;
                case 'editProcess':
                    $controllers_obj->editProcess($mod);
                    break;
                default:
                    echo 'ko ton taiddd ';
                    break;
            }
            break;
            
        default:
            require_once('banken/header.php');
            require_once('banken/footer.php');
            break;
    }

 ?>


