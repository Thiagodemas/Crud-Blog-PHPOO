<?php
/**
 * Description of Livro
 *
 * @author thiagodemas
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }

    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo '<hr/>Livro '.$this->titulo.' Escrito por '.$this->autor;
        echo '<br/> Paginas: '.$this->totPaginas.' Atual: '.$this->pagAtual;
        echo '<br/> Sendo Lido por '.$this->leitor->getNome();
    }

    public function abrir() {
        if ($this->aberto == false) {
            $this->setAberto(true);
        }  else {
            echo 'O livro Já esta aberto!';
        }
        
    }

    public function avancarPag() {
        if ($this->aberto == true) {
            $this->setPagAtual($this->getPagAtual() + 1);
        }else{
            echo 'O livro esta fechado!<br/><br/>';
        }
        
    }

    public function fechar() {
        if ($this->aberto == true) {
            $this->setAberto(false);
        }  else {
            echo 'O livro já esta fechado!';
        }
    }

    public function folhear($f) {
        if ($f > $this->totPaginas) {
            $this->pagAtual = 0;
        }  else {
            $this->pagAtual = $f;
        }
    }

    public function voltarPag() {
        
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}
