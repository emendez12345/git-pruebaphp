<?php


trait ExtraerCancion
{
    /**
     * Extrae la cancion como lo hace DiceLaCancion
     */
    public function extraerCancionDLC(){
        preg_match("/<h1 class=\"lyricTitle\">(.*)<\/h1>/ui", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }

}