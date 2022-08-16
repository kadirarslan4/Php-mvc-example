<?php

class nedminController extends mainController
{
    public function index() {
        $data=[];
        $this->callLayout("backend","main","nedmin","index",$data);
    }

    public function login() {
        $data=[];
        if (isset($_SESSION['admins']))
        {
            Header("Location:/nedmin");
            exit;
        } else {
            $this->callView("nedmin","login",$data);

        }
    }

    public function loginControl() {

        $data=[];
        $loginControlModel=new nedminModel();
        $data=$loginControlModel->loginControl();



        if ($data['status']) {
            $this->callLayout("backend","main","nedmin","index",$data);
        } else {
            $this->callView("nedmin","login",$data);
        }
    }

    public function logout() {
        $data=[];
        $logout=new nedminModel();
        $logout->logout();
        $this->CallView("nedmin","login",$data);
    }

}