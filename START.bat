@echo off

set proyek=tahfidz
set browser=chrome
set port=9623

title %proyek%

cd "%proyek%"
start %browser% http://localhost:%port%
D:\php\php -S localhost:%port%