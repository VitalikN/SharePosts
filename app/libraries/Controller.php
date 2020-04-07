<?php
/*
*Base controller
*Loads the model and views
*/
class Controller{
    //load model
    public function model($model){
        //require model file
        require_once '../app/models/'. $model . '.php';

        //install model
        return new $model();
    }

    // Load view
    public function view($view, $data = []){
        //Check for view file
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            // View does not exist
            die('Views does not exist');
        }
    }
}