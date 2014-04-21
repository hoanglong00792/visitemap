<?php

/**
 * Created by PhpStorm.
 * User: seb
 * Date: 19/04/14
 * Time: 11:42
 */
class Pointinteret extends CI_Controller
{

    /**
     * Page d'ajout d'un point d'interet
     */
    public function ajout()
    {

        // Si l'user valide le formulaire
        if (isset($_POST['send']) && !empty($_POST['send'])) {

            // On charge les modeles qui vont bien
            $this->load->model('pointinteret_model');
            $this->load->model('video_model');
            $this->load->model('listevideo_model');

            // On Ajoute le point d'interet
            $nom= $_POST['name'];
            $cout = $_POST['price'];
            $date = $_POST['date'];
            $position = $_POST['location'];
            $description = $_POST['description'];
            $note = $_POST['score'];


            $id_point_interet = $this->pointinteret_model
                                     ->addPointInteret($nom,
                                                       $cout,
                                                       $description,
                                                       $note,
                                                       $position,
                                                       $date);

            // Puis les éventuelles vidéos
            $video = 'video';
            $i = 2;

            while (isset($_POST[$video]) && !empty($_POST[$video])) {
                $id_video = $this->video_model->addVideo('', $_POST[$video], '', '');
                $video = 'video' . $i++;

                // On fait la liaison avec le point d'interet
                $this->listevideo_model->addListeVideo($id_video,$id_point_interet);

            }

            unset($_POST['send']);

            // SI tout c'est bien passé on informe a l'user que son point d'interet a éta ajouté
            $this->load->view('vue_ajout_pointinteret_succes.php');


        }else{
            $this->load->view('vue_ajout_pointinteret.php');
        }






    }


}