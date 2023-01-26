<?php

// Stipendio, Persona
// Capo, Impiegato ---> extends Persona
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

$persona = new Persona("Mario", "Rossi", "10-01-1990", "Roma", "abcdefghi");

echo $persona->getHtml();
?>