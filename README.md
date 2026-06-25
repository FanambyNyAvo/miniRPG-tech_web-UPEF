# ⚔ Chroniques du Plateau — Mini RPG PHP POO

Projet scolaire — Tech Web Avancé (L3 GLBD)

---

## Lancer le projet

1. Copier le dossier dans `C:\xampp\htdocs\mini-rpg\`
2. Démarrer **Apache** dans XAMPP
3. Ouvrir `http://localhost/mini-rpg/index.php`

---

## Structure

```
mini-rpg/
├── index.php              ← point d'entrée
├── classes/
│   ├── Character.php      ← classe abstraite
│   ├── Hero.php           ← héros (HP:30, ATK:7)
│   ├── Enemy.php          ← ennemi (HP:20, ATK:5)
│   ├── Potion.php         ← collectible sur le plateau
│   ├── Board.php          ← grille 10×10
│   └── Game.php           ← simulation de la partie
├── templates/
│   ├── layout.php         ← squelette HTML
│   ├── config.php         ← formulaire de stats
│   └── game.php           ← arène + JavaScript
└── assets/
    └── style.css          ← thème RPG fantasy
```

---

## Comment jouer

1. Configurer les HP et ATK du héros et de l'ennemi
2. Cliquer sur **Lancer la bataille**
3. Avancer avec le bouton **Tour suivant**
4. À la fin, **Reconfigurer** pour rejouer

---

## Mécaniques

- Le héros **fuit vers la potion** si ses HP tombent à 50%
- L'ennemi entre en **RAGE** (ATK +3) si ses HP passent sous 10
- Les positions de départ sont **aléatoires** à chaque partie

---

## Auteur

Fanamby — L3 GLBD
