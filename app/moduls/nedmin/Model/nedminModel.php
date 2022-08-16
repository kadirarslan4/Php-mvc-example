<?php
class nedminModel extends mainModel
{
   public function indexModel() {

   }

   public function loginControl() {
//       echo "<pre>";
//       print_r($_POST);
//       exit;
       $sonuc=$this->db->adminsLogin(
           htmlspecialchars($_POST['admins_username']),
               htmlspecialchars($_POST['admins_pass']),
                   $_POST['remember_me']
           );
       return $sonuc;
   }

   public function logout() {
       $this->nedminLogout();
   }
}