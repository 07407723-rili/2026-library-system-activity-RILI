A PHP application (OOP-based) for managing books, borrow records, and fines. Built with PSR-12 coding standards.

Author
Jaidan Gabriel O. Rili

Rewuirements
PHP 8.0+
MYSQL 5.7+
GIT

Installation
Clone the repo
Import database/schema.sql into MYSQL
Copy .env.example -> .env and set database credentials
Run composer install (optional)

File Structure Code
src/
---- Config/
---- Entity/
---- Repository/
---- Service/
---- Exception/
---- View/ 
public/

PSR-12 Standards
declare(strict_types=1);
4-space indentation
namespace: App\Library
Prepared statements
Full type declarations
