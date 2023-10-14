include 'class.db.php';
$db = Db::getInstanсe();

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];

$q = "INSERT INTO users (username, email, phone) VALUES ($name, $email, $phone);";
$db->exec($q, [], __FILE__);
