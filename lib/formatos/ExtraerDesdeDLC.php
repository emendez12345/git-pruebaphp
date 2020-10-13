<?php
/**
 *Extrae toda la data de el sitio web dicelacancion.com
 */


class ExtraerDesdeDLC extends Extractor{

    protected function getNombreArtista()
    {
        return $this->extraerDesdeDLC();
    }

    protected function getNombreCancion()
    {
        return $this->extraerCancionDLC();
        // TODO: Implement getNombreCancion() method.
    }

    protected function getLetra()
    {
        return $this->extraerLetraDLC();
        // TODO: Implement getLetra() method.
    }

    protected function getLinkYoutube()
    {
        // TODO: Implement getLinkYoutube() method.
    }
}