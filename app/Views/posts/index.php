<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <main class="container py-8">
    <div class="flex justify-between">
      <h1 class="text-3xl">Lista de posts</h1>
      <button class="btn">Nuevo</button>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        {posts}
        <tr>
          <td>{id}</td>
          <td>{title}</td>
          <td>
            <a href="/posts/edit/{id}" class="btn btn-sm">
              <i class="fa fa-pen"></i>
            </a>
            <a href="/posts/delete/{id}" class="btn btn-sm">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
        {/posts}
      </tbody>
    </table>
  </main>
</body>

</html>