# ProyectoIAW_CV
## Manual para instalar y configurar la API html2pdf en XAMPP y crear el Currículum Vítae a través del formulario

### Instalar Compozer en Xampp

- instala compozer.
1. sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php

- Despues  de la instalación, para crear un enlace simbólico para xampp

2. sudo ln -s /opt/lampp/bin/php /usr/local/bin/php

- También hay que dar permisos a la ruta del servidor apache en este caso

3. sudo chmod -R 777 /opt/lampp/htdocs


- Descarga el paquete html2pdf

4. cd /opt/lampp/htdocs/proyectoiaw
5. git clone https://github.com/spipu/html2pdf.git

- Cargar framework html2pdf
6. composer global require spipu/html2pdf

enlace de ayuda para crear el HTML.
https://www.youtube.com/watch?v=IPTVvOl1ia0

