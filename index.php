<?php

// Stipendio, Persona
// Capo, Impiegato ---> extends Persona

class Stipendio
{
    private $mensile;

    private $tredicesima;

    private $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);
    }

    public function getMensile()
    {
        return $this->mensile;
    }

    public function setMensile($mensile)
    {
        $this->mensile = $mensile;
    }

    public function getTredicesima()
    {
        return $this->tredicesima;
    }

    public function setTredicesima($tredicesima)
    {
        $this->tredicesima = $tredicesima;
    }

    public function getQuattordicesima()
    {
        return $this->quattordicesima;
    }

    public function setQuattordicesima($quattordicesima)
    {
        $this->quattordicesima = $quattordicesima;
    }

    // Creo la funzione "getAnnuale()" che mi restituisce lo stipendio annuale;
    public function getAnnuale()
    {
        $annuale = $this->mensile * 12;
        if ($this->tredicesima) {
            $annuale = $annuale + $this->mensile;
        }
        if ($this->quattordicesima) {
            $annuale = $annuale + $this->mensile;
        }

        return $annuale;
    }

    public function getHtml()
    {

        return
            "<h2> Stipendio</h2>" .
            "Mensile: " . $this->getMensile() . "<br>" .
            // Converto i valori all'interno di $stipendio per poi stamparli.
            "Tredicesima: " . ($this->getTredicesima() ? "Si" : "No") . "<br>" .
            "Quattordicesima: " . ($this->getQuattordicesima() ? "Si" : "No") . "<br>" .
            "Annuale: " . $this->getAnnuale() . "<br>";
    }
}
class Persona
{
    private $nome;
    private $cognome;
    private $dataDiNascita;
    private $luogoDiNascita;
    private $codiceFiscale;
    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale)
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setDataDiNascita($dataDiNascita);
        $this->setLuogoDiNascita($luogoDiNascita);
        $this->setCodiceFiscale($codiceFiscale);

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    public function getDataDiNascita()
    {
        return $this->dataDiNascita;
    }

    public function setDataDiNascita($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;
    }

    public function getLuogoDiNascita()
    {
        return $this->luogoDiNascita;
    }

    public function setLuogoDiNascita($luogoDiNascita)
    {
        $this->luogoDiNascita = $luogoDiNascita;
    }

    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
    }

    public function getHtml()
    {

        return
            "Nome: " . $this->getNome() . "<br>" .
            "Cognome: " . $this->getCognome() . "<br>" .
            "Data di Nascita: " . $this->getDataDiNascita() . "<br>" .
            "Luogo: " . $this->getLuogoDiNascita() . "<br>" .
            "CF: " . $this->getCodiceFiscale() . "<br>";
    }
}
class Impiegato extends Persona
{
    private Stipendio $stipendio;
    private $dataDiAssunzione;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, Stipendio $stipendio, $dataDiAssunzione)
    {
        parent::__construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale);
        $this->setStipendio($stipendio);
        $this->setDataDiAssunzione($dataDiAssunzione);
    }

    public function getStipendio()
    {
        return $this->stipendio;
    }

    public function setStipendio($stipendio)
    {
        $this->stipendio = $stipendio;
    }

    public function getDataDiAssunzione()
    {
        return $this->dataDiAssunzione;
    }

    public function setDataDiAssunzione($dataDiAssunzione)
    {
        $this->dataDiAssunzione = $dataDiAssunzione;
    }

    // Creo una funzione "getAnnuale()" che restituisce lo stipendio annuale a partire dall'oggetto stipendio.

    public function getAnnuale()
    {
        $this->getStipendio()->getAnnuale();
    }

    public function getHtml()
    {
        return parent::getHtml()
            . "Stipendio: " . $this->getStipendio()->getAnnuale() . "<br>"
            . "Data di Assunzione: " . $this->getDataDiAssunzione();
    }

}
class Capo extends Persona
{
    private $dividendo;
    private $bonus;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, $dividendo, $bonus)
    {
        parent::__construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale);
        $this->setDividendo($dividendo);
        $this->setBonus($bonus);
    }

    public function getDividendo()
    {
        return $this->dividendo;
    }

    public function setDividendo($dividendo)
    {
        $this->dividendo = $dividendo;
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    // Creo una funzione "getRedditoAnnuale()" che restituisce il reddito annuale.
    public function getRedditoAnnuale()
    {
        return $this->dividendo * 12 + $this->bonus;
    }

    public function getHtml()
    {
        return parent::getHtml()
            . "Dividendo: " . $this->getDividendo() . "<br>"
            . "Bonus: " . $this->getBonus() . "<br>"
            // Richiamo la funzione "getRedditoAnnuale()
            . "Reddito Annuale: " . $this->getRedditoAnnuale() . '<br>';
    }
}



$stipendio = new Stipendio(2000, true, false);
$persona1 = new Persona("Mario", "Rossi", "1990-06-20", "Roma", "abcdefghi");
$persona2 = new Persona("Piero", "Costanzi", "1980-05-12", "Milano", "lmnopqrst");

$impiegato = new Impiegato("Mario", "Rossi", "1990-06-20", "Roma", "abcdefghi", $stipendio, "2021-02-10");
$capo = new Capo("Piero", "Costanzi", "1980-05-12", "Milano", "lmnopqrst", 25000, 12500);


echo "<h1>Persona</h1>";
echo $persona1->getHtml();
echo "<h1>Impiegato</h1>";
echo $impiegato->getHtml();
echo "<br>---------------------------------------<br>";
echo "<h1>Persona</h1>";
echo $persona2->getHtml();
echo "<h1>Capo</h1>";
echo $capo->getHtml();
?>