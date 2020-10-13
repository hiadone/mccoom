<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Hospital group model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Hospital_group_model extends CB_Model
{

    /**
     * 테이블명
     */
    public $_table = 'hospital_group';

    /**
     * 사용되는 테이블의 프라이머리키
     */
    public $primary_key = 'hgr_id'; // 사용되는 테이블의 프라이머리키

    public $cache_prefix = 'hospital_group/hospital-group-model-get-'; // 캐시 사용시 프리픽스

    public $cache_time = 86400; // 캐시 저장시간

    public $allow_order_field = array('hgr_id','hgr_order'); //정렬이 가능한 필드
    
    function __construct()
    {
        parent::__construct();

        check_cache_dir('hospital_group');
    }


    public function get_one($primary_value = '', $select = '', $where = '')
    {
        $use_cache = false;
        if ($primary_value && empty($select) && empty($where)) {
            $use_cache = true;
        }

        if ($use_cache) {
            $cachename = $this->cache_prefix . $primary_value;
            if ( ! $result = $this->cache->get($cachename)) {
                $result = parent::get_one($primary_value);
                $this->cache->save($cachename, $result, $this->cache_time);
            }
        } else {
            $result = parent::get_one($primary_value, $select, $where);
        }
        return $result;
    }


    public function get_admin_list($limit = '', $offset = '', $where = '', $like = '', $findex = '', $forder = '', $sfield = '', $skeyword = '', $sop = 'OR')
    {
        $select = 'hospital_group.*, member.mem_id, member.mem_userid, member.mem_nickname, member.mem_is_admin, member.mem_icon';
        $join[] = array('table' => 'member', 'on' => 'hospital_group.mem_id = member.mem_id', 'type' => 'left');
        $result = $this->_get_list_common($select, $join, $limit, $offset, $where, $like, $findex, $forder, $sfield, $skeyword, $sop);
        return $result;
    }


    public function delete($primary_value = '', $where = '')
    {
        if (empty($primary_value)) {
            return false;
        }
        $result = parent::delete($primary_value);
        $this->cache->delete($this->cache_prefix . $primary_value);

        return $result;
    }


    public function update($primary_value = '', $updatedata = '', $where = '')
    {
        if (empty($primary_value)) {
            return false;
        }
        $result = parent::update($primary_value, $updatedata);
        if ($result) {
            $this->cache->delete($this->cache_prefix . $primary_value);
        }

        return $result;
    }
}
