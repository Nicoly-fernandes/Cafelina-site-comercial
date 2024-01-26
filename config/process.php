<?php
    session_start();

    include_once("connection.php");


    $data = $_POST;

        if(!empty($data)) {

            if($data["type"] === "create") {
            
                $product = $data['product'];
                $price = $data['price'];
    
                $query = "INSERT INTO menu (product, price) VALUES (:product, :price)";
    
                $stmt = $conn->prepare($query);
    
                $stmt->bindParam(":product", $product);
                $stmt->bindParam(":price", $price);
        
                try {
                   
                    $stmt->execute();
                    $_SESSION['msg'] = "";
    
                } catch(PDOException $e) {
    
                    $error = $e->getMessage();
    
                    echo "Erro: $error";   
    
                }         
                
    // EDITAR MENU/PRODUTO
    
                } else if($data["type"] === "edit") {
    
                    $product = $data["product"];
                    $price = $data["price"];
                    $id = $data["id"];
    
                    $query = "UPDATE menu
                              SET product = :product, price = :price
                              WHERE id = :id";
    
                    $stmt = $conn->prepare($query);
    
                    $stmt->bindParam(":product", $product);
                    $stmt->bindParam(":price", $price);
                    $stmt->bindParam(":id", $id);
    
                        try {
                    
                            $stmt->execute();
                            $_SESSION['msg'] = "foi";
            
                        } catch(PDOException $e) {
            
                            $error = $e->getMessage();
            
                            echo "Erro: $error";
            
                        }
    
    // DELETAR PRODUTO
                }   else if($data["type"] === "delete") {
    
                    $id = $data["id"];
    
                    $query = "DELETE FROM menu WHERE id = :id";
    
                    $stmt = $conn->prepare($query);
    
                    $stmt->bindParam(":id", $id);
    
                        try {
    
                            $stmt->execute();
                            $_SESSION["msg"] = "";
    
                        }   catch (PDOException $e) {
    
                            $error = $e->getMessage();
    
                            echo "Erro: $error";
                        }
                }

                    header("location:" . $BASE_URL . "../index.php");

        } else {

    $id = (!empty($_GET['id'])) ? $_GET['id'] : null;

            if (!empty($id)) {

                $query = "SELECT * FROM menu WHERE id = :id";


                $stmt = $conn->prepare($query);
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $menu = $stmt->fetch();

            } else {

                $menu = [];

                $query = "SELECT * FROM menu";

                $stmt = $conn->prepare($query);
                $stmt->execute();

                $menu = $stmt->fetchAll();
            }
        }

    $conn = null;

?>