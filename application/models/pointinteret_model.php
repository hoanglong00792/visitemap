<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Pointinteret_model
 * Contient toutes les requetes utiles pour manipuler les point d'interet
 *
 * @changelog
 * 0.1 - 20/04/14 Version Initiale (Sébastien)
 *
 */
class Pointinteret_model extends CI_Model
{
    protected $table = 'point_interet';


    /**
     * Ajout d'un point d'interet
     * Retourne l'id de l'element inséré
     * @param $nom
     * @param $cout
     * @param $description
     * @param $note
     * @param $position
     * @param $date
     * @return mixed
     */
    public function addPointInteret($nom,$cout,$description,$note,$position,$date){

        $this->db->set('nom',$nom)
                        ->set('cout',$cout)
                        ->set('description',$description)
                        ->set('note',$note)
                        ->set('position',$position)
                        ->set('date',$date)
                        ->insert($this->table);

        return $this->db->insert_id();

    }


    public function editPointInteret(){

    }

    /**
     * @return int
     */
    public function getCountPointInteret(){
        return (int) $this->db->count_all_results($this->table);
    }


    public function getPointInteret($params = null){

    }

}