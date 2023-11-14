<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>09</title>
    <style>
      a {
        display: block;
      }
    </style>
  </head>
  <body>
    <script>
      fetch('07.php')
        .then((response) => response.json())
        .then((actors) => {
          actors.forEach((actor) => {
            const anchor = document.createElement('a');

            anchor.href = actor.tmdb_url;
            anchor.textContent = actor.name;

            document.body.appendChild(anchor);
          });
        });
    </script>
  </body>
</html>