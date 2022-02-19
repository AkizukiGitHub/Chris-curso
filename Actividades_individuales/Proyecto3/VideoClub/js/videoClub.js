class Socio{
    CreaSocio(nombre,apellidos,direccion,telefono,directorPref,generoPref){
        this.nombres = nombre;
        this.apellidos = apellidos;
        this.direccion = direccion;
        this.telefono = telefono;
        this.directorPref = directorPref;
        this.generoPref = generoPref;
    }
}

class Peliculas{
    CreaPeliculas(titulo,genero,director,actores){
        this.titulo = titulo;
        this.genero = [genero];
        this.director = director;
        this.actores = [actores];
    }
}

class Cintas extends Peliculas{
    CreaCintas(titulo,genero,director,actores,numCinta,disponible){
        super(titulo,genero,director,actores);
        this.numCinta = numCinta;
        this.disponible = disponible;
    }
}
