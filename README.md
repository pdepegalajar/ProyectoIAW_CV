# ProyectoIAW_CV
## Manual para instalar y configurar la API html2pdf en XAMPP y crear el Currículum Vítae a través del formulario
## Toda la instalacion está hecha con el Software Xampp for Linux.
- https://www.apachefriends.org/es/index.html
### Instalar Compozer en Xampp

1. Instala **compozer**.

      - sudo apt-get install compozer 

      - sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php

2. Después de la instalación, hay que crear un **enlace simbólico para xampp**

      - sudo ln -s /opt/lampp/bin/php /usr/local/bin/php

### Descarga el proyecto

  - cd /opt/lampp/htdocs/
  - sudo chmod 777 /opt/lampp/htdocs/
      
  - git clone https://github.com/pdepegalajar/ProyectoIAW_CV.git

  - cd /opt/lampp/htdocs/ProyectoIAW_CV


### Descarga la API HTML2PDF

3. Descarga el paquete **html2pdf**

      - git clone https://github.com/spipu/html2pdf.git

4. También hay que **dar permisos** a la carpeta html2pdf en este caso

      - sudo chmod -R 777 /opt/lampp/htdocs/ProyectoIAW_CV/html2pdf/

5. Cargar framework **html2pdf**

      - cd /opt/lampp/htdocs/ProyectoIAW_CV/html2pdf/
      
      - sudo chown -R daemon:daemon /home/jipii/.composer

      - composer global require spipu/html2pdf

6. Ejecutar la instalación.

      - composer install --no-dev

7. Una vez **instalada la API y descargado esta librería** hay que crear una carpeta para que se guarden las fotos subidas.

      - sudo mkdir /opt/lampp/publico

8. Después hay que darle **permisos de escritura**, yo lo que haré es adueñar la carpeta al usuario del xampp(daemon)

      - sudo chown daemon:daemon /opt/lampp/publico

9. probar en el navegador

      - http://localhost/ProyectoIAW_CV

10. Ya Debería estar funcionando el formulario y el generador pdf en XAMPP.

## Fuentes:

### API HTML2PDF

- https://github.com/spipu/html2pdf

#### Multitud de ejemplos para basarse o aprender.

- https://github.com/spipu/html2pdf/tree/master/examples

#### Licencia de la API HTML2PDF(OSL-3.0)

- https://github.com/spipu/html2pdf/blob/master/LICENSE.md

#### También algunos scripts php basados en en el manual de Programación web en PHP de Bartolomé Sintes Marco.

- http://www.mclibre.org/consultar/php/

#### Prácticas realizadas en clase


###### Realizado por Alfonso Manuel García León como Proyecto Final de Implantación de Aplicaciones Web de 2º de ASIR
