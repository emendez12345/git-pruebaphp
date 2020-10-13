<?php
//Aqui va el codigo de la extraccion de l letra de diferentes artistaas

trait ExtraerLetra
{
        public function extraerLetraDLC(){
        preg_match("/<p class=\"about no-print\">(.*)<\/p>/ui", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }
}