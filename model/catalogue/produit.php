<?php

/*  
    Objet php représentant un produit.
*/
class Produit {

    protected $url = '';
    protected $nom = '';
    protected $processeur = '';
    protected $ram = '';
    protected $ecran = '';
    protected $batterie = '';
    protected $poids = '';

    function __construct($_url, $_nom ,  $_processeur, $_ram, $_ecran, $_batterie, $_poids)
    {
        $this->url = $_url;
        $this->nom = $_nom;
        $this->processeur = $_processeur;
        $this->ram = $_ram;
        $this->ecran = $_ecran;
        $this->batterie = $_batterie;
        $this->poids = $_poids;
    }


    public function getUrl() {
        return $this->url;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getProcesseur() {
        return $this->processeur;
    }

    public function getRam() {
        return $this->ram;
    }

    public function getEcran() {
        return $this->ecran;
    }

    public function getBatterie() {
        return $this->batterie;
    }

    public function getPoids() {
        return $this->poids;
    }



}