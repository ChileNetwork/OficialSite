# sitioOficial


1.- Creamos un repositorio nuevo en nuestro profile de Github. Iniciamos el repositorio con dentro de /Users/msoto/sitioOficial:
	$git init
2.- Luego aplicamos los siguientes comandos:
	$git commit -m "first commit"
	$git remote add origin git@github.com:ChileNetwork/sitioOficial.git
	$git push -u origin master
3.- Asi terminamos con la subida de archivos de nuestro repositorio local donde luego podemos editar nuestros archivos y volverlos a subir creando nuevas versiones de nuestro desarrollo de sitio web.

4.- Despues de haber editado los archivos que necesitemos, verificamos los archivos que hay sufrido algun cambio y que estaran listos para subirse en un proximo push.

5.- Verificamos modificaciones con:
	$git status
	On branch master
	Your branch is up to date with 'origin/master'.

	Changes not staged for commit:
	  (use "git add <file>..." to update what will be committed)
	  (use "git checkout -- <file>..." to discard changes in working directory)

		modified:   README.md

	no changes added to commit (use "git add" and/or "git commit -a")

6.- Para comenzar con una nueva actualizacion de nuestros archivos creando una nueva version de nuestro sistema hacemos:
	$git add .
	$git commit -m "Segundo Commit - Subir archivos editados en localhost"