### Laravel Concept

Para deployar el proyecto:
1. Clonar el repositorio
2. Abrir una terminal situados en la raíz del proyecto y escribir `composer update`
3. Crear una base de datos. No importa el nombre. El character set debe ser `utf8 -- UTF-8 Unicode` y collation `utf8_general_ci`
4. Ejecutar el script `zonas.sql` que se encuentra dentro de la carpeta `database/scripts`, sobre la base de datos creada en el punto anterior
5. Renombrar el archivo `.env.example` a `.env`
6. Abrir el archivo `.env` y modificar los valores para configurar la base de datos (`DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`)
7. Escribir, en la terminal, el comando `php artisan serve`
8. Ingresar al navegador y digirise a `http://localhost:8000/api/municipios`. Si devuelve valores json, ¡todo salió como lo esperado! (Caso contrario, puede consultar)
