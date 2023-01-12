<?php

$host = "localhost";
$user = "cafnix";
$pass = "password";
$db = "emiking";

//connect to the database
$mysqli = new mysqli($host, $user, $pass, $db);


//create tables if they don't exist, staff, books and borrowers
$mysqli->query("CREATE TABLE IF NOT EXISTS staff (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), username VARCHAR(30), password VARCHAR(30))");
$mysqli->query("CREATE TABLE IF NOT EXISTS books (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), title VARCHAR(30), author VARCHAR(30), isbn VARCHAR(30), status VARCHAR(30))");
$mysqli->query("CREATE TABLE IF NOT EXISTS borrowers (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email VARCHAR(30), phone VARCHAR(30), address VARCHAR(30), book VARCHAR(30))");

//insert records to all tables
$mysqli->query("INSERT INTO staff (username, password) VALUES ('admin', 'admin')");
$mysqli->query("INSERT INTO books (title, author, isbn, status) VALUES ('The Hobbit', 'J.R.R. Tolkien', '9780547928227', 'Available')");
$mysqli->query("INSERT INTO books (title, author, isbn, status) VALUES ('The Lord of the Rings', 'J.R.R. Tolkien', '9780547928227', 'Available')");
$mysqli->query("INSERT INTO books (title, author, isbn, status) VALUES ('The Silmar ilion', 'J.R.R. Tolkien', '9780547928227', 'Available')");
$mysqli->query("INSERT INTO books (title, author, isbn, status) VALUES ('The Children of Hurin', 'J.R.R. Tolkien', '9780547928227', 'Available')");

//insert into borrowers table
$mysqli->query("INSERT INTO borrowers (name, email, phone, address, book) VALUES ('John Doe', 'johndoe@gmail.com', '1234567890', '123 Main Street', 'The Hobbit')");

//select all records and display in a table from staff table
$result = $mysqli->query("SELECT * FROM staff");
echo "<table border='1'>
<tr>
<th>id</th>
<th>username</th>
<th>password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

//select all records and display in a table from books table
$result = $mysqli->query("SELECT * FROM books");
echo "<table border='1'>
<tr>
<th>id</th>
<th>title</th>
<th>author</th>
<th>isbn</th>
<th>status</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['isbn'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
echo "</table>";

//select all records and display in a table from borrowers table
$result = $mysqli->query("SELECT * FROM borrowers");
echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>address</th>
<th>book</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['book'] . "</td>";
echo "</tr>";
}
echo "</table>";

//close the connection
$mysqli->close();






?>


