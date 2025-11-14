# Keep Talking and Everybody Codes

Initialiseer de applicatie met:

```
composer setup
```

Dit commando draait ook `database/seeders/CameraSeeder.php`, waar de CSV import gebeurt.

De CLI opdracht kan je testen via `php artisan camera:search Neude`. De implementatie is te vinden in `app/Console/Commands/SearchCamera.php`

De frontend is de voorpagina van de app, en de HTML/JS/CSS staat in `resources/*`.
