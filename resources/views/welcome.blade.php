<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Home Page</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<ul>
  <li><a href="/contact">Contact Us</a></li>
  <li>  <a href="/welcome"></a>Home</li>
  <li><a href="/aboutus">About Us</a></li>
</ul>

@foreach($tasks as $task)
<ul>
	<li><?= $task ?></li>
</ul>
@endforeach

  </body>
</html>
