# PHP MVC Starter

A modern PHP MVC starter kit with Object-Oriented Programming, Composer autoloading, Node.js integration, and a Singleton database connection. Provides a clean MVC structure, secure routing, and well-commented code for scalable and maintainable PHP applications.

## Features

- **Object-Oriented Programming (OOP)**: Follow best practices for maintainable and scalable code.
- **MVC Architecture**: Clear separation of Models, Views, and Controllers.
- **Composer PSR-4 Autoloading**: Automatic class loading and ready for external libraries.
- **Node.js Integration**: Use npm or yarn for frontend assets and build tools.
- **Secure Routing**: Explicit parameter handling and safe URL mapping.
- **Singleton Database Connection**: Efficient and secure DB interactions.
- **Well-Commented Code**: Easy to understand, extend, and maintain.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/php-mvc-starter.git
   cd php-mvc-starter
   
2. Install PHP dependencies:
   ```bash
   composer install
   
3. Install Node.js dependencies:
   ```bash
   npm install
   
4. Configure your environment:
   ```bash
   Copy .env.example to .env and set database credentials and other settings.
   
5. Start the development server:
   ```bash
   php -S localhost:8000 -t public
   
## Usage
Routes are defined in the Router class.

Controllers receive parameters explicitly.

Views receive a $data array for rendering variables safely.

Use the Singleton DB class for all database interactions.

## Contributing

Pull requests and issues are welcome. Ensure code follows OOP and MVC best practices and is well-commented.

## License

MIT License
