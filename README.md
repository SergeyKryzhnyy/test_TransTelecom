Тестовое задание:
Необходимо реализовать гостевую книгу на Laravel или «чистом» PHP,
на backend и JavaScript (jQuery) или Vue.js, на frontend. Приложение должно
быть реализовано в виде SPA (single-page application). Для верстки
желательно использовать framework Bootstrap.
Основная часть:
1 Развернуть framework Laravel (последнюю версию), если выбрали его. В
качестве базы данных можно использовать sqllite, mysql или postgresql.
2 Реализовать возможность регистрация\авторизация.
3 Реализовать роли для зарегистрированных пользователей:
«администратор» и «пользователь».
3.1. Реализовать разграничение прав в зависимости от роли.
3.2. При регистрации, пользователю присваивается роль
«пользователь».
3.3. Учетная запись администратора создается Вами заранее.
4 Неавторизованный пользователь может оставить анонимную запись.
5 Если пользователь оставляет запись анонимно, то больше с ней он ничего
сделать не может.
6 Если пользователь авторизован, то он должен иметь возможность в
течение 2-х часов изменить, либо удалить свою запись.
7 Администратор может в любое время изменять и удалять любые записи из
интерфейса приложения.
8 Все записи вывести в общем списке с пагинацией и с сортировкой по
времени.
Дополнительная часть:
9 При отправке сообщения пользователем, администратору должно
приходить уведомление на email, о том кто, когда и что написал (можно
использовать любую доступную библиотеку).
10 У администратора должна быть возможность выгрузки сообщений в excel
за произвольный период (можно использовать любую доступную
библиотеку).
11 Фоновая проверка на наличие новых сообщений, при их наличии вывод
на страницу.

Развернуть проект с помощью openServer:
Точка входа test-task/public

выполнить команды:
1. composer install
2. php artisan migrate

Добавить данные в базу - файл test-task.sql или  php artisan db:seed
