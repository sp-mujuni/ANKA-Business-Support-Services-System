Models - app/Models/user.php
Views - resources/views
Controllers - app/Http
--

Main route - web.php (routing the website)
Database setup - .env
Global scope variables- public
Testing/Development config - .env
Production Environmnet config - config/app.php
Upload files - storage
Third party content - vendor (can be reobtained using *composer update*)
Security - git ignore
Database - database/migrations (tables), seeders(data)
--

Database setup:
-Create db in xampp manually
-Run php artisan migrate
> Creating migrations and repective model at once
php artisan make:model [name] --migration. Then copy and paste table structure
--

Controller setup:
- php artisan make:controller TestController
*Each function in a controller has a route (URL). All routes must be in web.php in routes folder.
*View is loaded from controller. No URL in controller, only views.
*Load content through view(s) to layout(s). Repetitive content is put in layout
*Sections are generated in view folder. Loaded using @yield function in the layout.

STAGES FROM CONTROLLER TO VIEW
- TestController>Routes>Views/text<->Layouts/ankalayout