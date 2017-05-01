<?php
namespace arsku\parser;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author arsku
 */
interface ParserInterface {
    /**
     * @param string $url
     * @param string $tag
     * return array
     */
    public function process (string $url, string $tag): array;
}
