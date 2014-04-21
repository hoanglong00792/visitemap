<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Video_model
 * Contient toutes les requetes utiles pour manipuler les vidéo
 *
 * @changelog
 * 0.1 - 21/04/14 Version Initiale (Sébastien)
 *
 */
class Video_model extends CI_Model
{
    protected $table = 'video';


    /**
     * Ajout d'une vidéo
     * @param $titre
     * @param $lien
     * @param null $description
     * @return mixed
     */
    public function addVideo($titre,$lien,$description = null){

        $this->db->set('titre',$titre)
            ->set('lien',$lien)
            ->set('description',$description)
            ->insert($this->table);

        return $this->db->insert_id();

    }


    public function editVideo(){

    }

    /**
     * @return int
     */
    public function getCountVideo(){
        return (int) $this->db->count_all_results($this->table);
    }


    public function getVideo($params = null){

    }

}