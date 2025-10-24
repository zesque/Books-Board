<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="utf-8"/>
        <title> Все книги </title>
        <style>
        .header
        {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .aside
        {
            background-color: #f4f4f4;
            padding: 15px;
            width: 200px;
            float: left;
            height: 400px;
        }
        .main
        {
            margin-left: 220px;
            padding: 20px;
            background: white;
            min-height: 400px;
            text-align: center;
        }
        .footer
        {
            background-color: #333;
            color: white;
            padding: 30px 20px;
            text-align: center;
            margin-top: 40px;
        }
        nav
        {
            background-color: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        </style>
    </head>

    <body>
        <div class="header">
            <h1> Шапка сайта </h1>
            <div class="nav">
            </div>
        </div>

        <div class="aside">
            <h1> Панель сбоку </h1>
            <div class="nav">
                Текст панели сбоку
            </div>
        </div>

        <div class="main">
            <h1> Язык разметки HTML </h1>
            <img src="new-php-logo.png" />
        </div>

        <div class="footer">
            <ul>
                <li> <i> Контакты </i> </li>
                <li> <i> Юридическая информация </i> </li>
            </ul>
        </div>
    </body>

</html>
