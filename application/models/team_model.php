<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model { 
  function getAllTeam() {
    $query_string = 
      "SELECT *
      FROM team";

    $result = $this->db->query($query_string);

    return $result->result();
  }

  /*
  <?php foreach($team_list as $key): ?>
                                    <td><?php echo $key->team_name; ?></td>
                                  <?php endforeach; ?>*/
}