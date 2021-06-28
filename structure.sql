
create table users(
id Integer Primary Key auto_increment,
Username Varchar(50),
Password Varchar(255)
)Engine='InnoDB';



create table contents(
id Integer Primary Key auto_increment,
immagine Varchar(255),
titolo Varchar(255),
settore Varchar(255),
descrizione Varchar(255)
)Engine='InnoDB';

create table headers(
id Integer Primary Key auto_increment,
descrizione Varchar(500),
immagine Varchar(500)
)Engine='InnoDB';

Insert into headers(descrizione,immagine) values("FiereItalia è anche un'ente internazionale che permette di partecipare ad eventi esclusivi in ogni parte del Mondo! Cerca l'evento che più ti aggrada , acquista il biglietto ed vivi un'esperienza unica! Diamo anche la possibilità di visualizzare ed partecipare ai concerti più importanti dell'anno!","./images/fiere_internazionali.png");
Insert into headers(descrizione,immagine) values("In questa sezione è possibile acquistare un biglietto per partecipare ad una delle fiere in programma. Il nostro obiettivo è quello di far vivere un'esperienza fieristica irripetibile nel suo genere al cliente cercando di soddisfare ogni sua esigenza , stupendo le sue aspettative , tenendo conto di tutte le misure di sicurezza relative al Covid-19.","./images/fiera.jpg");


create table content_user(
user_id Integer,
content_id Integer,
Primary Key(user_id,content_id),
index index_id_utente(user_id),
index index_id_contatto(content_id),
FOREIGN KEY(user_id) REFERENCES users(id), 
FOREIGN KEY(content_id) REFERENCES contents(id) 
)Engine='InnoDB';

create table charts(
id integer ,
immagine Varchar(255),
titolo Varchar(255),
data Varchar(255),
Primary Key(id,titolo,data),
luogo Varchar(255),
quantita Integer,
index index_id(id),
Foreign key(id) references users(id)
)Engine='InnoDB';

create table events(
id Integer Primary Key auto_increment,
immagine Varchar(255),
titolo Varchar(255),
settore Varchar(255),
descrizione Varchar(255)
)Engine='InnoDB';
select * from events;

create table event_user(
user_id Integer,
event_id Integer,
Primary Key(user_id,event_id),
index index_id_utente(user_id),
index index_id_contatto(event_id),
FOREIGN KEY(user_id) REFERENCES users(id), 
FOREIGN KEY(event_id) REFERENCES events(id) 
)Engine='InnoDB';


/*insert into contenuti(contenuto) values('{"images": ["./images/pitti.jpg"]}');*/
insert into contents(immagine,titolo,settore,descrizione) values("./images/pitti.jpg","Pitti Uomo","Moda","Pitti Uomo è una manifestazione dedicata al 'pronto moda maschile.',è una delle più spettacolari sfilate di moda internazionale");
insert into contents(immagine,titolo,settore,descrizione) values("./images/roma-image.jpg","International Estetica","Estetica","La manifestazione, organizzata da Fiera Roma, è un punto di riferimento nel panorama del settore estetico.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/made-expo.jpg","Made-Expo","Edilizia","MADE-expo è la piattaforma di incontro privilegiata tra aziende, architetti, ingegneri, progettisti,imprese ,rivenditori e operatori del settore.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/sabo.png","Sabo Roma","Arredamento","Sabo Roma è il salone italiano dedicato a: home décor, bomboniere, articoli da regalo,bijoux.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/mecfor.jpg","Mecfor Expo","Manufatturiero","MECFOR è l'evento leader  delle fiere internazionali riguardanti le tecnologie per la lavorazione dei metalli.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/homi-fashion.png","Homi Fashion&Jewel","Moda","HOMI Fashion&Jewels è la principale fiera  per quanto riguarda il settore della moda.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/motor_bike_expo.jpg","Motor Bike Expo","Motociclismo","Motor Bike Expo è la fiera più importante dedicata alle moto, comprende tutti i settori: dallo street al racing fino all'adventouring.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/cibus.jpg","Cibus Expo","Alimentare","CIBUS TEC è tra le più innovative manifestazioni di tecnologia alimentare e una vetrina completa delle migliori soluzioni.");
insert into contents(immagine,titolo,settore,descrizione) values("./images/vinitaly.png","Vinitaly","Alimentare","Vinitaly Special Edition è un evento professionale  che permette di scoprire lo scenario del mercato vitivinicolo italiano.");

select * from contents;
delete  from contents where id=26;
delete from content_user where user_id=1;
select * from charts;
delete from charts where id=1;
use structure;
select * from content_user;
delete from users where username='lo';