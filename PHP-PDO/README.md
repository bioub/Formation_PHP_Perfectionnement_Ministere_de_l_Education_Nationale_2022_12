# Exercice PDO

On voudrait une nouvelle table `company` contentant les colonnes suivantes :

- `id` de type `INT` en clé primaire et auto-incrémentée
- `name` de type `VARCHAR(100)` 
- `city` de type `VARCHAR(100)` 

Compléter le fichier `command/seed-database.php` pour qu'il créé également la table `company` et 2 enregistrement `Apple` et `Microsoft`

Créer un fichier `public/company-list.php` qui affiche en HTML les sociétés provenant de la base sous la forme :

```html
<nav>
    <a href="company-details.php?id=1">Apple</a>
    <a href="company-details.php?id=2">Microsoft</a>
</nav>
```

Créer ensuite `public/company-details.php` qui affichera le nom et la ville de la société dont l'id est reçue en query