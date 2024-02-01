Creando crud para alumnos

Primero creo todo el ecosistema

```bash
php artisan make:model alumno -a
```
Creo el factory, migration, seeder, model, controller, resource y policy

modificar el php poniendo las rutas

modifico el controller de alumno

le pongo en el index
```bash
$nombreVariable= nombre::all();
return view("nombreVariable", compact("nombreVariable"));
```
modifico el controller del nombre

creo una carpeta en resources/views con el nombre

modifico el store 
```bash
$datos = $request->input();
        $nombre = new nombre($datos);
        $nombre->save();
        \Laravel\Prompts\info("Nombre: ".$nombre);
        return redirect(route("nombres.index"));
```
