**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** FOMETIO Jordan Mesmin

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_

---isset()  retourne TRUE si la variable est définie et que sa valeur n'est pas null. Retourne FALSE si la variable n'a pas été déclarée ou si elle vaut null.

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

_Votre réponse ici_

---empty() retourne TRUE si la variable n'existe pas ou si sa valeur est considérée vide et Retourne FALSE si la variable contient une valeur non vide.

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

_Votre réponse ici_

---la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` est que avec $var = 0, isset($var) retourne TRUE car la variable existe et n'est pas null. En revanche empty($var) retourne TRUE car 0 est considéré comme une valeur vide. C'est la différence .


### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | TRUE | TRUE |
| `$var = "";` | TRUE | TRUE|
| `$var = "bonjour";` | TRUE | FALSE  |
| Variable non déclarée | FALSE  | TRUE |
| `$var = "0";` | TRUE | TRUE |
| `$var = null;` | FALSE  | TRUE |
| `$var = false;` | TRUE | TRUE |
| `$var = [];` | TRUE | TRUE |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

_Votre réponse ici_

---La méthode GET transmet les données via l'URL donc visibles dans la barre d'adresse, tandis que POST les envoie dans le corps de la requête HTTP donc invisibles pour l'utilisateur. On préfère GET pour les recherches, les filtres. La limite de GET est le nombre trop grand de caracterss selon les navigateurs.  POST n'a pas de limite côté navigateur et convient mieux aux données sensibles ou volumineuses.

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

_Votre réponse ici_

--- URL : catalogue.php?categorie=php&page=2

--- Récupération côté serveur :

$categorie = $_GET["categorie"];
$page = $_GET["page"];

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

_Votre réponse ici_

---  "r" : lecture seule, pointeur au début du fichier.
- "r+" : lecture et écriture, pointeur au début du fichier.
- "w" : écriture seule, pointeur au début. Si le fichier existe, son contenu est effacé ; sinon il est créé.
- "w+ : lecture et écriture, pointeur au début. Si le fichier existe, son contenu est effacé ; sinon il est créé.
- "a" : écriture seule, pointeur à la fin du fichier (ajout). Le fichier est créé s'il n'existe pas.
- "a+" : lecture et écriture, pointeur à la fin du fichier (ajout). 


### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?

_Votre réponse ici_

La fonction `header()` envoie un en-tête HTTP brut au navigateur. 


header("Location: page_suivante.php");


## 📊 Barème

| Question | Sous-question | Points |
|---|---|---|
| Q1 — isset() vs empty() | a) isset() | 8 |
| | b) empty() | 8 |
| | c) Différence avec 0 | 8 |
| | d) Tableau | 16 |
| Q2 — GET/POST/fichiers | a) GET vs POST | 15 |
| | b) Passage de paramètres | 15 |
| | c) Modes fopen() | 20 |
| | d) header() | 10 |
| **TOTAL** | | **100** |

---

> ⚠️ Seuil de réussite : **50/100 minimum**
