<?php
class libro
{
    public function __creaLibro($titulo,$isbn,$autor)
    {
        $this->titulo = $titulo;
        $this->isbn = $isbn;
        $this->autor = $autor;
    }
    
    public function imprimeLibro($libro){
        $this->libro = $libro;
        print <<<END
        "Titulo: $libro"
        END;
    }
}
class autor
{
    public function __creaAutor($id,$nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }
}

$autor01 = new autor(01,"Pierce Brown");
$libro01 = new libro("Amanecer Rojo","1444758993",$autor01);

?>