<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Listevideo_model
 * Contient toutes les requetes utiles pour manipuler les liste de vidéo
 *
 * @changelog
 * 0.1 - 21/04/14 Version Initiale (Sébastien)
 *
 */
class Listevideo_model extends CI_Model
{
    protected $table = 'liste_video';


    /**
     * Ajout d'une entrée dans la table liste_video
     * @param $id_video
     * @param $id_point_interet
     * @return mixed
     */
    public function addListeVideo($id_video,$id_point_interet){

        $this->db->set('id_video_FK',$id_video)
            ->set('id_point_interet_FK',$id_point_interet)
            ->insert($this->table);

        return $this->db->insert_id();
    }


}