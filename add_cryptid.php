<!-- //requires here -->

<!-- <call functi -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload a cryptid</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <a class="home" href="index.php">
                Home
            </a>
        </nav>
        <!-- remove the action attrib -->
        <form action="cryptid_upload.php" method="POST" class="userform">
            <h2>Form</h2>
            <label>Name:</label>
            <input type="text" name="cryptid_name" required>
            <label>Weird Level:</label>
            <input type="number" name="cryptid_weird" min="0" max="10" required>
            <label>Fear Level:</label>
            <input type="number" name="cryptid_fear" min="0" max="10" required>
            <label>Size:</label>
            <input type="number" name="cryptid_size" min="0" max="10" required>
            <label>Meal Rating:</label>
            <select name="meal_taste" size="4" multiple>
                <option value="delicious">Delicious</option>
                <option value="okay">Okay</option>
                <option value="disgusting">Disgusting</option>
                <option value="escaped">It got away</option>
            </select>
            <input type="submit" name="submit" class="submit">
        </form>
    </body>
</html>