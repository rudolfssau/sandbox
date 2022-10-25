<?php
/**
 * Find
 */
public function find(int $id)
{
    $db = DB::getInstance();
    $sql = $db->prepare(“SELECT * FROM users WHERE id = ? “);
$sql->execute([$id]);
$list = [];
if ($item = $sql->fetch()) {
// code …
}

return $list;
}

/**
 * Store Action
 */
public function store()
{
    try {
        $db = DB::getInstance();
// insert to users table
        $sql = “INSERT INTO users (first_name, last_name, age) VALUES (?, ?, ?)”;
$row = $db->prepare($sql);

if ($row->execute([$first_name, $last_name, $age])) {
    $result = 1; // successful
} else {
    $result = 0; // failed
}
} catch (PDOException $ex) {
        $result = $ex->getMessage();
    }
    return $result;
}

/**
 * Update Action
 */
public function update()
{
    try {
        $db = DB::getInstance();
// update to users table
        $sql = “UPDATE users SET first_name = ?, last_name = ?, age = ? WHERE id = ?”;
$row = $db->prepare($sql);

if ($row->execute([$first_name, $last_name, $age, $id])) {
    $result = 1; // successful
} else {
    $result = 0; // failed
}
} catch (PDOException $ex) {
        $result = $ex->getMessage();
    }
    return $result;
}

/**
 * Delete Action
 */
public function delete(int $id)
{
    try {
        $db = DB::getInstance();
// delete to users table
        $sql = “DELETE FROM users WHERE id = ?”;
$row = $db->prepare($sql);

if ($row->execute([$id])) {
    $result = 1; // successful
} else {
    $result = 0; // failed
}
} catch (PDOException $ex) {
        $result = $ex->getMessage();
    }
    return $result;

}