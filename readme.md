Ciao a tutti!
Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*

Svolgimento:
- Creo un form che con method get e action /index.php
- Creo 1 variabile contente lettere maiuscole, minuscole, numeri e simboli
- Creo una funzione per concatenare randomicamente ciò che contenuto all'interno  della variabile

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

Svolgimento:
- Creo il file functions.php
- Sposto la funzione nel file functions
- Aggiungo l'include in index.php

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Svolgimento:
- Creo un file password.php
- Inserisco il session_start(); nell'index.php all'interno dell'if isset
- Inserisco il parametro session password = get psw_length
- Inserisco l'header con la location di password.php
- Inserisco include dir dentro password.php per includere il file functions.php
- Aggiungo session_start()
- Inserisco il nome della funzione

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
