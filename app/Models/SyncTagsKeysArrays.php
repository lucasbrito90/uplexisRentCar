<?php


namespace App\Models;


class SyncTagsKeysArrays
{

    /**
     * @param array $finder
     * @param $phrase
     * @return array
     *
     * retorna um array de chaves e valores filtrados de carros
     */
    function key_with_values(array $finder, $phrase){

        $items = [];

        foreach ($finder as $key => $value) {
            array_push( $items, $this->find_btween($phrase, $key, $value));
        }

        return $items;
    }

    /**
     * @param $phrase
     * @param $start
     * @param $end
     * @return string
     *
     * retorna os valores obtidos entre as tags informadas ...
     */
    function find_btween($phrase, $start, $end)
    {
        $string = ' ' . $phrase;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return trim( strip_tags( substr($string, $ini, $len) ) );
    }

    function article_items($html_tag, $tags_target) {

        $arts = [];

        foreach ($html_tag as $tag) {
            $items = $this->key_with_values($tags_target, $tag);
            array_push($arts, $items);
        }

        return $arts;
    }

    /**
     * @param $html_tag
     * @param $tags_target
     * @param $keys_object
     * @return array
     *
     * combina as chaves
     * e valores dos arrays
     */
    function merge_keys_object_with_html_target($html_tag, $tags_target, $keys_object) {

        $objects = [];
        $values_from_tags = $this->article_items($html_tag, $tags_target);

        foreach ($values_from_tags as $tags) {
            array_push( $objects , array_combine($keys_object, $tags));
        }

        return $objects;
    }

}
