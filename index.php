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
            "<h2> Stipendio</h2>" .
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
            "<h2> Persona </h2>" .
            "Nome: " . $this->getNome() . "<br>" .
            "Cognome: " . $this->getCognome() . "<br>" .
            "Data di Nascita: " . $this->getDataDiNascita() . "<br>" .
            "Luogo: " . $this->getLuogoDiNascita() . "<br>" .
            "CF: " . $this->getCodiceFiscale() . "<br>";
    }
}

class Impiegato extends Persona
{
    private $stipendio;
    private $dataDiAssunzione;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, $stipendio, $dataDiAssunzione)
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

    public function getHtml()
    {
        return
            "<h2>Stipendio Impiegato</h2>" .
            "Stipendio: " . $this->getStipendio()->getMensile() . "<br>"
            . "Data di Assunzione: " . $this->getDataDiAssunzione();
    }

}



$stipendio = new Stipendio(1000, "Si", "Si");
$persona = new Persona("Mario", "Rossi", "1990-06-20", "Roma", "abcdefghi");

$impiegato = new Impiegato("Mario", "Rossi", "1990-06-20", "Roma", "abcdefghi", $stipendio, "2021-02-10");

echo $stipendio->getHtml();
echo "<br>";
echo $persona->getHtml();
echo "<br>";
echo $impiegato->getHtml();
echo "<br>---------------------------------------<br>";
?>