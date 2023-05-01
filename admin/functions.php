function add_custom_shortlink($name, $url) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO shortlinks (name, url) VALUES (:name, :url)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':url', $url);
    return $stmt->execute();
}
