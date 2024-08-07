<?php

function getPermissions($json, $key){
    if($json == null):
        return null;
    else:
        $json = $json;
        $json = json_decode($json, true);
        if(array_key_exists('all', $json)):
            if($json['all']):
                return true;
            endif;
        endif;
        if(array_key_exists($key, $json)):
            return $json[$key];
        else:
            return null;
        endif;
    endif;
}

function user_role($id = null){
    $a = [
        '1' => 'Administrador', '2' => 'Colaborador', '3' => 'Driver', '4' => 'Comercio'
    ];
    if (!is_null($id)):
        return $a[$id];
    else:
        return $a;
    endif;
}