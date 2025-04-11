const obrasDeArte = [
    { 
     titulo: "Flauta Transversal", 
     id:1,
     autor: "", 
     imagen: ("../img/flautaN.jpeg"),
     audio: ("../audio/flauta.mp3")
    },
     
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Flauta Dulce", 
        id:2, 
        autor: "", 
        imagen: ("../img/flautaD.jpg")},
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Clarinete",
        id:3, 
        autor: "", 
        imagen: ("../img/clari.jpg") },
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Bajo Electrico",
        id:4, 
        autor: "", 
        imagen: ('../img/bajo.jpg')},
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Bateria",
        id:5, 
        autor: "", 
        imagen: ('../img/bateria.jpg') },
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Guitarra",
        id:6, 
        autor: "", 
        imagen: ('../img/guitarra.jpg') },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Percusiones", 
        id:7,
        autor: "Johannes Vermeer", 
        imagen: ('../img/percusiones.webp') },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Piano", 
        id:8,
        autor: "", 
        imagen: ('../img/piano.jpg') },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Saxofon Soprano",
        id:9, 
        autor: "", 
        imagen: ('../img/sopra.jpg')},
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Trombon",
        id:10, 
        autor: "", 
        imagen: ('../img/trombon.jpg') },
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Saxofon",
        id:11, 
        autor: "", 
        imagen:  ('../img/saxo.jpeg')},
          //-------------imagen ----------------------------------------------------------------------------

    { 

        titulo: "Trompeta",
        id:12, 
        autor: "", 
        imagen: ('../img/trompeta.jpg') },
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Violin",
        id:13, 
        autor: "", 
        imagen: ('../img/violin.png') },
          //-------------imagen ----------------------------------------------------------------------------

    
     
];


document.getElementById('button').addEventListener('click', () => {
  
    const obraAleatoria = obrasDeArte[Math.floor(Math.random() * obrasDeArte.length)];

    
    document.body.style.backgroundImage = `url(${obraAleatoria.imagen})`;
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center";

   
   
});