include 'class.db.php';
$db = Db::getInstanсe();

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];

$q = "INSERT INTO users (username, email, phone) VALUES ($name, $email, $phone);"; // не пишет
$db->exec($q, [], __FILE__);

//Если просто запустить api.php то вот этот запрос запишет - для теста проверял.
//$q = "INSERT INTO users (username, email, phone) VALUES ('Иван', 'info@ivan.com', '999555666');";
