
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './genius.js';
console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


let chanson = [
    {
        "image": "image/tiakola.jpg",
        "artiste": "Tiakola",
        "titre": "Fleurs",
        "sotie": "2022",
        "parole": " J'ai pris différentes gues-dro, j'arrive même plus à t'guer-dra Faut qu'on finisse sous tes draps (Faut qu'on finisse sous tes draps) Trop défoncé, j'suis sous codéine, j'sens plus mon cœur, j'sens plus mon pouls "

    },
    
]


function afficherMot() {

}

document.getElementById('btncheck').addEventListener('click', () => {

afficherMot()

}
)