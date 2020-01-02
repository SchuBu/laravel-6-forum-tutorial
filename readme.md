<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="200"></p>


## Laravel 6 Tutorial: Wir erstellen ein Forum

In diesem Tutorial erstellen wir mit Hilfe des Frameworks Laravel in Version 6 ein Forum. Dabei gehen wir ausführlich auf die Funktionen von Laravel ein. Zusätzlich zu Laravel kommen weitere Komponenten und Frameworks zum Einsatz:

- [Tailwind CSS](https://tailwindcss.com).
- [Font Awesome](https://fontawesome.com).
- [VueJS](https://vuejs.org/)
- und vieles mehr ...

## Lektionen als Branches
Auf Github könnt ihr die einzelnen Lektionen über die Branches aufrufen. Der Master-Branch spiegelt immer den aktuellen Stand wider.

## Template
Als Ausgangstemplate habe ich das [Tailwind-Preset](https://github.com/laravel-frontend-presets/tailwindcss) verwendet. Die Einrichtung und Vorbereitung des Templates zeige ich im Tutorial nicht. Ihr könnt aber mit dem Branch <code>lesson-0</code> starten. Dort fängt alles an!  

## Let's get started
Also gleich loslegen mit dem Ausgangstemplate starten: <code>https://github.com/SchuBu/laravel-6-forum-tutorial.git</code>

## Was muss ich sonst noch wissen?
Das Tutorial richtet sich an **fortgeschrittene Nutzer**, ihr solltet also schon erste Erfahrungen mit Laravel gesammelt haben.

## Was muss ich tun um zu starten?
- Clont das GIT-Repository
- führt <code>composer install</code> aus
- benennt die <code>.env.example</code> in <code>.env</code> um (z.B. über die Konsole mit <code>mv .env.example .env</code>)
- anschließend <code>php artisan key:generate</code> ausführen
- wenn ihr von Anfang an starten wollten, dann die "lesson-0" auschecken: <code>git checkout lesson-0</code>
- ansonsten müsst ihr zuvor noch eure Datenbank-Verbindung in der <code>.env</code> festlegen und anschließend <code>php artisan migrate --seed</code> ausführen 
- über <code>php artisan serve</code> könnt ihr den Laravel eigenen Webserver ausführen und das Projekt direkt im Browser betrachten

Happy coding !
 
