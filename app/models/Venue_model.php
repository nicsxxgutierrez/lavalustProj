<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Venue_model extends Model {


    public function getVenue()
    {
        return $this->db->table('venue')->get_all();
    }
    
}
?>
