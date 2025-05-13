const obrasDeArte = [
    { 
     titulo: "Flauta Transversal", 
     id:1,
     autor: "", 
     imagen: ("../img/flautaN.jpeg"),
     audio: ("../audios/flautaT.mp4")
    },
     
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Flauta Dulce", 
        id:2, 
        autor: "", 
        imagen: ("../img/flautaD.jpg"),
        audio: ("../audios/flautaD.mp4")},
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Clarinete",
        id:3, 
        autor: "", 
        imagen: ("../img/clari.jpg"),
        audio: ("../audios/clarinete.mp4") },
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Bajo Electrico",
        id:4, 
        autor: "", 
        imagen: ('../img/bajo.jpg'),
        audio: ("../audios/bass.mp4")},
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Bateria",
        id:5, 
        autor: "", 
        imagen: ('../img/bateria.jpg'),
        audio: ("../audios/bateria.mp4") },
        //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Guitarra",
        id:6, 
        autor: "", 
        imagen: ('../img/guitarra.jpg'),
        audio: ("../audios/guitarra.mp4") },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Percusiones", 
        id:7,
        autor: "Johannes Vermeer", 
        imagen: ('../img/percusiones.webp'),
        audio: ("../audios/percusiones.mp4") },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Piano", 
        id:8,
        autor: "", 
        imagen: ('../img/piano.jpg'),
        audio: ("../audios/piano.mp4") },
        //-------------imagen ----------------------------------------------------------------------------
    { 
        titulo: "Saxofon Soprano",
        id:9, 
        autor: "", 
        imagen: ('../img/sopra.jpg'),
        audio: ("../audios/SaxS.mp4")},
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Trombon",
        id:10, 
        autor: "", 
        imagen: ('../img/trombon.jpg'),
        audio: ("../audios/Trombones.mp4") },
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Saxofon",
        id:11, 
        autor: "", 
        imagen:  ('../img/saxo.jpeg'),
        audio: ("../audios/sax.mp4")},
          //-------------imagen ----------------------------------------------------------------------------

    { 

        titulo: "Trompeta",
        id:12, 
        autor: "", 
        imagen: ('../img/trompeta.jpg'),
        audio: ("../audios/trompeta.mp4") },
          //-------------imagen ----------------------------------------------------------------------------

    { 
        titulo: "Violin",
        id:13, 
        autor: "", 
        imagen: ('../img/violin.png'),
        audio: ("../audios/violin.mp4") },
         

    
     
];
let audio = null; 
let isPlaying = false; 

document.getElementById('button').addEventListener('click', () => {
    
    const obraAleatoria = obrasDeArte[Math.floor(Math.random() * obrasDeArte.length)];

   
    document.body.style.backgroundImage = `url(${obraAleatoria.imagen})`;
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundPosition = "center";

    // Detener 
    if (audio) {
        audio.pause(); 
        audio.currentTime = 0; 
    }

    
    audio = new Audio(obraAleatoria.audio);
    audio.loop = true; 
    audio.play(); 
    isPlaying = true; 
    document.getElementById('playPauseBtn').textContent = 'Pausa';
});

// Play/Pause
document.getElementById('playPauseBtn').addEventListener('click', () => {
    if (audio) {
        if (isPlaying) {
            audio.pause(); 
            isPlaying = false;
            document.getElementById('playPauseBtn').textContent = 'Play'; 
        } else {
            audio.play(); 
            isPlaying = true; 
            document.getElementById('playPauseBtn').textContent = 'Pausa'; 
        }
    }
});
