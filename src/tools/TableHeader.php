<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-03-05
 * Version      :   1.0
 */

namespace Tools;


class TableHeader
{
    /**
     * 获取显示表头
     * @param $key
     * @return array|mixed
     * @throws \Helper\Exception
     */
    public static function getHeader($key)
    {
        $cacheKey = "pf.tableheader.{$key}";
        $cache = \PF::app()->getCache();
        if (null === ($output = $cache->get($cacheKey))) {
            $data = \PF::app()->getDb()->getFindBuilder()
                ->setTable('pub_header_option')
                ->addWhere('`key`=:key AND `is_enable`=:is_enable')
                ->addParam(':key', $key)
                ->addParam(':is_enable', 1)
                ->setOrder('`sort_order` ASC, `id` ASC')
                ->queryAll();
            $R = [];
            foreach ($data as $re) {
                $tmp = [
                    'label' => $re['label'],
                ];
                if ($re['width']) {
                    $tmp['width'] = $re['width'];
                }
                if ($re['css_class']) {
                    $tmp['class'] = $re['css_class'];
                }
                if ($re['default']) {
                    $tmp['default'] = $re['default'];
                }
                $R[$re['code']] = $tmp;
            }
            $output = $R;
            $cache->set($cacheKey, $output, 3600);
        }
        return $output;
    }
}