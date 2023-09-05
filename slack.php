<?
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 獲取POST數據
    $postData = $_POST;
    
    $challenge = $_POST["challenge"];

    return $challenge;
}
?>
