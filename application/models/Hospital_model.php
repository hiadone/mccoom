<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Hospital model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Hospital_model extends CB_Model
{

    /**
     * 테이블명
     */ 
    public $_table = 'hospital';

    /**
     * 사용되는 테이블의 프라이머리키
     */
    public $primary_key = 'hpt_id'; // 사용되는 테이블의 프라이머리키

    
    public $allow_order_field = array('hpt_id','hpt_title','hpt_order','hpt_order, hpt_title'); //정렬이 가능한 필드
    function __construct()
    {
        parent::__construct();
    }


    public function get_admin_list($limit = '', $offset = '', $where = '', $like = '', $findex = '', $forder = '', $sfield = '', $skeyword = '', $sop = 'OR')
    {
        $select = 'hospital.*, member.mem_id, member.mem_userid, member.mem_nickname, member.mem_is_admin, member.mem_icon';
        $join[] = array('table' => 'member', 'on' => 'hospital.mem_id = member.mem_id', 'type' => 'left');
        $result = $this->_get_list_common($select, $join, $limit, $offset, $where, $like, $findex, $forder, $sfield, $skeyword, $sop);
        return $result;
    }
}
