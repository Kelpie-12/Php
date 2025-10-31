<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        button {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>

   
</head>
<body>

<header>
    
    <nav>
        <a href="{{ route('parent') }}">Родительская страница</a> |
        <a href="{{ route('child') }}">Дочерняя страница</a>
    </nav>
    <hr>
</header>

<main>
   
</main>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.toggle-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const userId = btn.getAttribute('data-user-id');
                const descRow = document.getElementById('description-row-' + userId);

                if (descRow.style.display === 'none') {
                    descRow.style.display = 'table-row';
                    btn.textContent = 'Скрыть описание';
                } else {
                    descRow.style.display = 'none';
                    btn.textContent = 'Показать описание';
                }
            });
        });
    });
</script>
</body>
</html>