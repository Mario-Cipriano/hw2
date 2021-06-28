const article1 = document.querySelector('.article1-preferiti');
let cont = 0;

function principale() {
    /* fetch(PREF_ROUTE).then(onResponse).then(onJsonP);*/
    fetch("home/conteggio_istanze").then(onResponse).then(onJSON);
}

function onResponse2(response) {
    return response.text();
}

function onJson(text) {
    console.log(text);
}

function onJson4(text) {
    console.log(text);
}

function onResponse(response) {
    return response.json();
}

function onJSON(json) {
    console.log(json);
    const evento = [];
    for (element of json) {
        evento.push(element);
    }
    carica(evento);
}


principale();

let events = 0;

function carica(contenuto) {
    for (let elemento of contenuto) {
        let sezione = undefined;
        if (elemento.id !== '') {
            sezione = document.querySelector(".event-view");
        }
        create_slot(sezione, elemento);
    }
}



function create_slot(sezione, elemento) {
    const divcontent = document.createElement('div');
    const img = document.createElement('img');
    img.src = elemento.immagine;
    const div = document.createElement('div');
    const h1 = document.createElement('h1')
    h1.textContent = elemento.titolo;
    const preferiti = document.createElement('img')
    preferiti.src = 'images/icon-add.png';
    const span_settore = document.createElement('span');
    span_settore.textContent = 'Settore:';
    const settore = document.createElement('h3')
    settore.textContent = elemento.settore;

    const paragrafo = document.createElement('p')
    paragrafo.textContent = elemento.descrizione;
    const bottone1 = document.createElement('button')
    bottone1.textContent = 'Mostra Piu';
    const bottone2 = document.createElement('button')
    bottone2.textContent = 'Mostra Meno';


    sezione.appendChild(divcontent)
    divcontent.appendChild(img)
    divcontent.appendChild(div)
    div.appendChild(h1)
    div.appendChild(preferiti)
    divcontent.appendChild(span_settore);
    span_settore.appendChild(settore);
    divcontent.appendChild(paragrafo)
    divcontent.appendChild(bottone1)
    divcontent.appendChild(bottone2)
        /*classi*/
    divcontent.classList.add('evento')
    preferiti.classList.add('preferiti')
    img.classList.add('section-img')
    div.classList.add('div-titolo')
    settore.classList.add('settore')
    h1.classList.add('title')
    paragrafo.classList.add('paragrafo', 'hidden')
    bottone2.classList.add('second', 'hidden')
    bottone1.classList.add('first')
    span_settore.classList.add('span_settore');


    const immagine_fiere = document.querySelectorAll('.section-img');
    for (let img of immagine_fiere) {
        img.addEventListener('click', ApriModale);
    }

    const modale_img = document.querySelector('.modale')
    modale_img.addEventListener('click', ChiudiModale);

    const SelezionaMostrapiu = document.querySelectorAll('.first');
    const SelezionaMostrameno = document.querySelectorAll('.second');
    const favourite = document.querySelectorAll('.preferiti');

    for (let bottone of SelezionaMostrapiu) {
        bottone.addEventListener('click', RimuoviMostraPiu);
    }


    for (let bottone of SelezionaMostrameno) {
        bottone.addEventListener('click', RimuoviMostraMeno)
    }

    for (let preferito of favourite) {
        preferito.addEventListener('click', AggiungiPreferiti);
        preferito.addEventListener('click', InserisciDB);
    }

}

function InserisciHeader(json) {
    console.log(json);
    const box1cont = document.querySelector('.box1-cont p');
    const box1img = document.querySelector('.box1-img img');
    const box2cont = document.querySelector('.box2-cont p');
    const box2img = document.querySelector('.box2-img img');
    const descrizione1 = json[0].descrizione
    const img1 = json[0].immagine;
    const descrizione2 = json[1].descrizione
    const img2 = json[1].immagine;
    box1cont.textContent = descrizione1
    box1img.src = img1
    box2cont.textContent = descrizione2
    box2img.src = img2

}
fetch('home/estraipreferiti').then(onResponse).then(onJson2);
fetch('home/header').then(onResponse).then(InserisciHeader);


function RimuoviMostraPiu(event) {
    event.target.classList.add('hidden')
    event.target.parentNode.querySelector('.paragrafo').classList.remove('hidden')
    event.target.parentNode.querySelector('.second').classList.remove('hidden')
}


function RimuoviMostraMeno(event) {
    event.target.parentNode.querySelector('.first').classList.remove('hidden')
    event.target.parentNode.querySelector('.paragrafo').classList.add('hidden')
    event.target.classList.add('hidden');
}
const modale = document.querySelector('.modale');

function ApriModale(event) {
    console.log('modale');
    const div = document.createElement('div');
    div.classList.add('modale-content')
    const immagine = document.createElement('img');
    const span = document.createElement('span');
    immagine.src = event.target.src
    span.textContent = event.target.parentNode.querySelector('.paragrafo').textContent;
    modale.appendChild(div);
    div.appendChild(immagine);
    div.appendChild(span);
    modale.classList.remove('hidden');
    document.body.classList.add('no-scroll');
}

function ChiudiModale() {
    modale.classList.add('hidden')
    modale.querySelector('img').remove();
    modale.querySelector('span').remove();
    document.body.classList.remove('no-scroll');
}

function RimuoviPreferiti(event) {
    cont--
    console.log('preferiti attuali', cont);
    if (cont === 0) {
        article1.classList.add('hidden')
    }
    event.target.parentNode.parentNode.classList.add('hidden')
    const titolo = event.target.parentNode.querySelector('h1');
    const titles = document.querySelectorAll('.title')
    for (let title of titles) {
        if (titolo.textContent === title.textContent) {
            const img_section = title.parentNode.querySelector('.preferiti');
            img_section.src = 'images/icon-add.png'
            img_section.addEventListener('click', AggiungiPreferiti);
            /*const formData = new FormData();
            formData.append('title', titolo.textContent);*/
            fetch("home/rimuovipreferiti/" + encodeURIComponent(titolo.textContent)).then(onResponse2).then(onJson4);
            const favourite = document.querySelectorAll('.preferiti');
            for (let preferito of favourite) {
                console.log('dentro il ciclo')
                preferito.addEventListener('click', InserisciDB);
            }
        }
    }
}



function AggiungiPreferiti(event) {
    cont++
    console.log(cont);
    event.target.src = 'images/raccolta-preferiti.png'
    event.target.removeEventListener('click', AggiungiPreferiti)
    const sectionpreferiti = document.querySelector('.section-preferiti')
    const divcontent = document.createElement('div')
    const img = document.createElement('img')
    const h1 = document.createElement('h1')
    const divtitle = document.createElement('div')
    const imgpreferiti = document.createElement('img')
    const settore = document.createElement('span');
    sectionpreferiti.appendChild(divcontent)
    divcontent.appendChild(img)
    divcontent.appendChild(divtitle)
    divtitle.appendChild(h1)
    divtitle.appendChild(imgpreferiti)
    divcontent.appendChild(settore);
    divcontent.classList.add('div-content')
    divtitle.classList.add('div-title')
    imgpreferiti.src = 'images/icon-remove.png'
    img.src = event.target.parentNode.parentNode.querySelector('.section-img').src;
    h1.textContent = event.target.parentNode.querySelector('.title').textContent;
    settore.textContent = event.target.parentNode.parentNode.querySelector('.settore').textContent;
    article1.classList.remove('hidden');
    imgpreferiti.addEventListener('click', RimuoviPreferiti)
}


function InserisciDB(event) {
    const titolo = event.target.parentNode.querySelector('.div-titolo .title').textContent;
    fetch("home/favourite/" + encodeURIComponent(titolo)).then(onResponse2).then(onJson);
    event.target.removeEventListener('click', InserisciDB);
}


function onJson2(json) {
    const favourite = document.querySelectorAll('.preferiti');
    for (let contenuto of json) {
        cont++;
        for (let preferito of favourite) {
            if (preferito.parentNode.querySelector('.title').textContent === contenuto.titolo) {
                preferito.src = 'images/icon-add.png';
                preferito.removeEventListener('click', AggiungiPreferiti);
                preferito.removeEventListener('click', InserisciDB);
                const sectionpreferiti = document.querySelector('.section-preferiti')
                const divcontent = document.createElement('div')
                const img = document.createElement('img')
                const h1 = document.createElement('h1')
                const divtitle = document.createElement('div')
                const imgpreferiti = document.createElement('img')
                const settore = document.createElement('span');
                sectionpreferiti.appendChild(divcontent)
                divcontent.appendChild(img)
                divcontent.appendChild(divtitle)
                divtitle.appendChild(h1)
                divtitle.appendChild(imgpreferiti)
                divcontent.appendChild(settore);
                divcontent.classList.add('div-content')
                divtitle.classList.add('div-title')
                imgpreferiti.src = 'images/icon-remove.png'
                img.src = contenuto.immagine;
                h1.textContent = contenuto.titolo;
                settore.textContent = contenuto.settore;
                article1.classList.remove('hidden');
                imgpreferiti.addEventListener('click', RimuoviPreferiti)
            }
        }
    }
}