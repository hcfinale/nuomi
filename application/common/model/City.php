<?php

namespace app\Common\model;

use think\Model;

class City extends Model
{
    //
    public function getNormalCitysByParentId($parentId=0) {
        $data = [
            'status' => 1,
            'parent_id' => $parentId,
        ];
        $order = [
            'id' => 'desc',
        ];
        // echo $this->getLastSql();exit;
        return $this->where($data)
            ->order($order)
            ->select();
    }

    public function getNormalCitys() {
        $data = [
            'status' => 1,
            'parent_id' => ['gt', 0],
        ];

        $order = ['id'=>'desc'];
        //return $this->where($data)->order($order)->fetchSql(true)->select();
        return $this->where($data)
            ->order($order)
            ->select();

    }
}
