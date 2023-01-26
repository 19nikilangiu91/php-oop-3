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

    public function getHtml()
    {

        return
            "Mensile: " . $this->getMensile() . "<br>" .
            "Tredicesima: " . $this->getTredicesima() . "<br>" .
            "Quattordicesima: " . $this->getQuattordicesima() . "<br>";
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

$stipendio = new Stipendio(1000, "Si", "Si");
$persona = new Persona("Mario", "Rossi", "10-01-1990", "Roma", "abcdefghi");

echo $stipendio->getHtml();
echo "<br>";
echo $persona->getHtml();
?>