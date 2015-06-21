<?php

namespace app\rbac;

use Yii;
use yii\rbac\Rule;

class UserGroupRule extends Rule {

    public $name = 'userGroup';

    public function execute($user, $item, $params) {
        if (!Yii::$app->user->isGuest) {
        
            $group = Yii::$app->user->identity->group;
//        print_r($item->name);
//        exit;    
            if ($item->name === 'admin') {
//                        print_r($item->name);
//        exit;
                return $group == 'admin';
            } elseif ($item->name === 'bloger') {
//                        print_r($item->name);
//        exit;
                return $group == 'admin' || $group == 'bloger' ;
//                return $group == 'bloger';
            }
        }
//            echo $item->name; exit;
//        if ($item->name !== 'guest') {
//                return true;
//            } 
        return true;
    }

}
