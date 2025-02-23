<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rectangle Collision Detection</title>
</head>
<body>
    <h1>Rectangle Collision Detection</h1>
    <p>Enter one rectangle per line in the format: <code>x,y,width,height</code></p>
    <form method="post" action="collisions.php">
        <textarea name="rectangles" rows="10" cols="50" placeholder="0,0,10,10&#10;5,5,10,10&#10;20,20,5,5&#10;8,8,3,3"></textarea><br><br>
        <input type="submit" value="Detect Collisions">
    </form>
</body>
</html>
