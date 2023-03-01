<?php

class Voiture {
    private $couleur;
    private $marque;
    private $nbPortes;
    private $proprio;
    private $distance;  
    private $onOff;
    private $distanceParcourue = 0;
    private $reservoir;
    private $consommation;


    
    public function getCouleur() {
        return $this->couleur;
    }
    public function setCouleur($couleur) {
        $this-> couleur = $couleur;
    }

    public function getMarque() {
        return $this->marque;
    }
    public function setMarque($marque) {
        $this-> marque = $marque;
    }

    public function getNbPortes () {
        return $this->nbPortes;
    }
    public function setNbPortes ($nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function getProprio () {
        return $this->proprio;
    }
    public function setProprio ($proprio) {
        $this->proprio = $proprio;
    }
    
    public function getOnOff(){
        return $this->onOff;
    }
    public function setOnOff($onOff){
        $this->onOff = $onOff;
    }

    public function getReservoir() {
        return $this->reservoir;
    }
    public function setReservoir($reservoir){
        $this->reservoir = $reservoir;
    }

    public function getConsommation(){
        return $this->consommation;
    }
    public function setConsommation ($consommation) {
        $this->consommation = $consommation;
    }

    function __construct($couleur, $marque, $nbPortes, $proprio, $reservoir, $consommation) {
        $this->setCouleur($couleur);
        $this->setMarque($marque);
        $this->setNbPortes($nbPortes);
        $this->setProprio($proprio);
        $this->setReservoir($reservoir);
        $this->setConsommation($consommation);
        $this->setOnOff('off');
        
    }

    

    public function infoCar() {
        $distance = $this->reservoir / $this->consommation;
        echo 'La voiture de '. $this->proprio .' est une ' . $this->marque . ' ' . $this->nbPortes . ' portes de couleur ' . $this->couleur . ' conçue pour rouler ' . number_format((float)$distance, 2, '.', '') .' kilomètres <br> Ses phares sont ' . $this->onOff . '<br>';
    }

    public function onOff() {
        if ($this->onOff == 'off') {
            $this->onOff = ('on');
        } else {
            $this->onOff = ('off');
        }
    }

    public function phareOn() {
        if ($this->onOff = ('on')) {
            echo 'On allume les feux... Et on peut donc commencer à rouler. [...petite ellipse...] <br>';
        } else {
            echo 'Les feux ont besoins d\'être allumés !';
        }
    }

    public function rouler($km) {
        echo 'La ' . $this->marque . ' roule sur une distance de ' . $km . ' kilomètres. <br>' ;
        $this->distanceParcourue += $km;
    }

    public function tableauDeBord() {
        $distance = $this->reservoir / $this->consommation;
        $autonomie = $distance - $this->distanceParcourue;
        $utilisationReservoir = $this->consommation * $this->distanceParcourue;
        $resteReservoir = $this->reservoir - $utilisationReservoir;
        $voyantReservoir = $this->reservoir * 0.1;
        $surDistance = $this->distanceParcourue - $distance;

        if ($autonomie == 0 ) {
            echo ' Il n\'y a plus de jus dans la voiture, il faut faire un tour à la pompe !';
        } elseif ($autonomie < 0) {
            echo 'Impossible d\'aller au delà. Tu ne peux pas faire les derniers ' . number_format((float)$surDistance, 2, '.', '') . ' kilomètres ! ';
        } else {
            echo 'On peut encore rouler sur environ ' . $autonomie . ' kilomètres.';
            echo ' La distance totale parcourue est de ' . $this->distanceParcourue . ' kilomètres <br>';
        }
        if ($utilisationReservoir > $this->reservoir ) {
            echo 'TERMINADO PIPO<br>';
        } elseif($resteReservoir < $voyantReservoir) {
            echo '<h3 class="redLight"> ! Le voyant rouge de la jauge du réservoir s\'allume !</h3> On est dans l\'jus frérot, il nous reste ' . $resteReservoir . ' litres<br>';
        }
        else {
            echo 'On peut continuer à rouler, il reste ' . $resteReservoir . ' litres dans le réservoir<br>';
        }
    } 
}
?>
