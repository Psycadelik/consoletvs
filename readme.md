Git clone this repository 
composer install 
cp .env.example .env
php artisan key:generate
use php artisan route:list to view all routes as below:

+--------+----------+------------+------+-------------------------------------------------+--------------+
| Domain | Method   | URI        | Name | Action                                          | Middleware   |
+--------+----------+------------+------+-------------------------------------------------+--------------+
|        | GET|HEAD | /          |      | App\Http\Controllers\ChartController@bar        | web          |
|        | GET|HEAD | api/user   |      | Closure                                         | api,auth:api |
|        | GET|HEAD | area       |      | App\Http\Controllers\ChartController@area       | web          |
|        | GET|HEAD | areaspline |      | App\Http\Controllers\ChartController@spline     | web          |
|        | GET|HEAD | donut      |      | App\Http\Controllers\ChartController@donut      | web          |
|        | GET|HEAD | gauge      |      | App\Http\Controllers\ChartController@gauge      | web          |
|        | GET|HEAD | geo        |      | App\Http\Controllers\ChartController@geo        | web          |
|        | GET|HEAD | line       |      | App\Http\Controllers\ChartController@line       | web          |
|        | GET|HEAD | percent    |      | App\Http\Controllers\ChartController@percentage | web          |
|        | GET|HEAD | pie        |      | App\Http\Controllers\ChartController@pie        | web          |
+--------+----------+------------+------+-------------------------------------------------+--------------+

php artisan serve or visit consoletvs.dev to serve the application

hack away!! :)

visit erik.cat/projects/Charts/docs to view the documentation and how to extend the charts further.
