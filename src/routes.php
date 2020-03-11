<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function (Request $request, Response $response, $args) {
    $response ->getBody()->write("Hello XXXX");
    return $response;
});


// 1.Users

$app->get('/api/user', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM users";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $users = json_encode($users);
        $response->getBody()->write(".$users.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/user/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM users WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $user = json_encode($user);
        $response->getBody()->write(".$user.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});


// 2. Password Reset
$app->get('/api/passwordreset', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM password_reset";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $passwordreset = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $passwordreset = json_encode($passwordreset);
        $response->getBody()->write(".$passwordreset.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});





// 3. Courses

$app->get('/api/courses', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM courses";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $courses = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $courses = json_encode($courses);
        $response->getBody()->write(".$courses.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/course/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM courses WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $course = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $course = json_encode($course);
        $response->getBody()->write(".$course.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});





// 4. Categories

$app->get('/api/categories', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM categories";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $categories = json_encode($categories);
        $response->getBody()->write(".$categories.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/category/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM categories WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $category = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $category = json_encode($category);
        $response->getBody()->write(".$category.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});





// 5. Comments

$app->get('/api/comments', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM comments";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $comments = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $comments = json_encode($comments);
        $response->getBody()->write(".$comments.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/comment/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM comments WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $comment = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $comment = json_encode($comment);
        $response->getBody()->write(".$comment.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});





// 6. Items

$app->get('/api/items', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM items";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $items = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $items = json_encode($items);
        $response->getBody()->write(".$items.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/item/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM items WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $item = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $item = json_encode($item);
        $response->getBody()->write(".$item.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});





// 7. Payments

$app->get('/api/payments', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM payment";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $payments = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $payments = json_encode($payments);
        $response->getBody()->write(".$payments.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/payment/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM payment WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $payment = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $payment = json_encode($payment);
        $response->getBody()->write(".$payment.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});


// 8. Corse User

$app->get('/api/courseusers', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM course_user";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $courseusers = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $courseusers = json_encode($courseusers);
        $response->getBody()->write(".$courseusers.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});

$app->get('/api/courseuser/{id}', function (Request $request, Response $response, $args) {
    $id = $request->getAttribute('id');
    $sql = "SELECT * FROM course_user WHERE id = $id";

    try{
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $courseuser = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $courseuser = json_encode($courseuser);
        $response->getBody()->write(".$courseuser.");
        return $response;
    } catch(PDOException $e){
        $errorMessage = '{"error": {"text": '.$e->getMessage().'}';
        $response->getBody()->write(".$errorMessage.");
        return $response;
    }
});







