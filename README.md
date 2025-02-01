# Rating Application 📊

Welcome to the **Rating Application**! This project allows users to rate products asynchronously, making use of **PHP**, **JavaScript**, **Axios**, and **MySQL**.

[Versión en Español](#versión-en-español)

## 🚀 Introduction

The goal of this project is to create a rating application using asynchronous programming. The application includes the following features:

- 📝 **Login page**
- 🔑 **Registration page**
- ⭐ **Product rating page**

On the product rating page, users will see their name once logged in, and they will have access to a list of products dynamically loaded from the database. Each product will have a star rating system, allowing the user to click on a star to submit their rating to the database. This interaction is performed asynchronously for a seamless user experience.

## ⚙️ Technologies Used

- **PHP**: For server-side programming.
- **JavaScript**: For client-side programming.
- **Axios**: A JavaScript library used for making asynchronous requests between the client and server using AJAX.
- **MySQL**: Database for storing user information and product ratings.

## 📁 Project Structure

The project is organized in the following directories:

- **Node_modules**  
  Contains the necessary files for Node.js to manage the packages and dependencies required for the project.

- **Public**  
  Contains the frontend files, including CSS, JavaScript, and HTML files.

- **Src**  
  Contains the backend files, including:
  - The database connection class.
  - Files for creating the database and required tables.
  - Handlers for user registration, login, logout, rating management, and viewing previous ratings.

## 🛠️ Installation

To run this project locally, follow these steps:

1. Clone the repository:

   `git clone <repository-url>`

2. Install the project dependencies:

   If you haven’t installed Node.js yet, please do so first.

   Then, in the project root, run the following command to install the required dependencies:

   `npm install`

3. Set up the database:

   - Make sure you have MySQL installed and set up.
   - In the `src` directory, you will find scripts to create the database and tables.

4. Run the server:

   If your project uses Node.js for the backend, ensure the server is running with the following command:

   `node app.js`

   If you're using PHP for the backend, ensure you have XAMPP or an appropriate server environment running and navigate to your project folder in your local server.

5. Access the application:

   Once the server is running, you can access the application in your browser at the following URL:

   `http://localhost:3000`

## 🌟 Features

- **User Registration**: Users can register by providing their details via a form.
- **Login**: Users can log in with their credentials and access the rating page.
- **Product Ratings**: Users can view a list of products and submit ratings via a star system. Ratings are submitted asynchronously and are updated in real-time without needing to reload the page.


## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

# Versión en Español 🇪🇸

## Introducción

El objetivo de este proyecto es crear una aplicación de valoraciones utilizando programación asíncrona. La aplicación consta de las siguientes páginas:

- 📝 **Página de inicio de sesión**
- 🔑 **Página de registro**
- ⭐ **Página de valoraciones de productos**

En la página de valoraciones de productos, los usuarios verán su nombre una vez que hayan iniciado sesión, y tendrán acceso a una lista de productos cargados dinámicamente desde la base de datos. Cada producto tendrá un sistema de valoraciones por estrellas, lo que permitirá al usuario hacer clic en una estrella para enviar su valoración a la base de datos. Esta interacción se realiza de manera asíncrona para una experiencia de usuario fluida.

## Tecnologías Utilizadas

- **PHP**: Para la programación del lado del servidor.
- **JavaScript**: Para la programación del lado del cliente.
- **Axios**: Una librería de JavaScript utilizada para realizar solicitudes asíncronas entre el cliente y el servidor mediante AJAX.
- **MySQL**: Base de datos para almacenar la información de los usuarios y las valoraciones de productos.

## Estructura del Proyecto

El proyecto está organizado en los siguientes directorios:

- **Node_modules**  
  Contiene los archivos necesarios para que Node.js gestione los paquetes y dependencias del proyecto.

- **Public**  
  Contiene los archivos frontend, incluidos CSS, JavaScript y HTML.

- **Src**  
  Contiene los archivos backend, incluyendo:
  - La clase de conexión a la base de datos.
  - Archivos para crear la base de datos y las tablas necesarias.
  - Manejadores para el registro de usuarios, inicio de sesión, cierre de sesión, gestión de valoraciones y visualización de valoraciones previas.

## Instalación

Para ejecutar este proyecto localmente, sigue estos pasos:

1. Clona el repositorio:

   `git clone <repository-url>`

2. Instala las dependencias del proyecto:

   Si aún no tienes Node.js instalado, instálalo primero.

   Luego, en la raíz del proyecto, ejecuta el siguiente comando para instalar las dependencias necesarias:

   `npm install`

3. Configura la base de datos:

   - Asegúrate de tener MySQL instalado y configurado.
   - En el directorio `src`, encontrarás los scripts para crear la base de datos y las tablas.

4. Ejecuta el servidor:

   Si tu proyecto utiliza Node.js para el backend, asegúrate de que el servidor esté en funcionamiento con el siguiente comando:

   `node app.js`

   Si utilizas PHP, asegúrate de tener XAMPP o un entorno de servidor adecuado en ejecución y navega a la carpeta del proyecto en tu servidor local.

5. Accede a la aplicación:

   Una vez que el servidor esté funcionando, podrás acceder a la aplicación en tu navegador en la siguiente URL:

   `http://localhost:3000`

## Características

- **Registro de usuarios**: Los usuarios pueden registrarse proporcionando sus datos mediante un formulario.
- **Inicio de sesión**: Los usuarios pueden iniciar sesión con sus credenciales y acceder a la página de valoraciones.
- **Valoraciones de productos**: Los usuarios pueden ver una lista de productos y enviar valoraciones mediante un sistema de estrellas. Las valoraciones se envían de forma asíncrona y se actualizan en tiempo real sin necesidad de recargar la página.


## Licencia

Este proyecto está bajo la licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.

