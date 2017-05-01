<?php
namespace arsku\parser;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parser
 *
 * @author arsku
 */
class Parser implements ParserInterface 
{
    
/**
 * 
 * @param string $url
 * @param string $tag
 * @return array
 */
    public function process(string $url, string $tag): array 
    {
        
        $htmlPage = file_get_contents($url);
        
        if ($htmlPage === false){
            return ['Invalid URL'];
        }
        //komentaras naujai versijai imituoti
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        
        if (empty($strings[1])) {
            return ['There are no such on the page'];
        }
        
        
        return $strings[1];
        
    }

    //put your code here
}
