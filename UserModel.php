<?php

class UserModel {
    private $db;

    public function __construct($databaseConnection) {
        $this->db = $databaseConnection;
    }

    public function createUser($username, $password, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $username, $hashedPassword, $email);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->affected_rows > 0;
    }

    public function getUser($userId) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->get_result()->fetch_assoc();
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("s", $username);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->get_result()->fetch_assoc();
    }

    public function getUserByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("s", $email);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateUser($userId, $username, $email) {
        $stmt = $this->db->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("ssi", $username, $email, $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->affected_rows > 0;
    }

    public function updateUserPassword($userId, $newPassword) {
        $stmt = $this->db->prepare("UPDATE users SET password = ? WHERE id = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $stmt->bind_param("si", $hashedPassword, $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->affected_rows > 0;
    }

    public function deleteUser($userId) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("i", $userId);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        return $stmt->affected_rows > 0;
    }

    public function verifyPassword($username, $password) {
        $user = $this->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function getAllUsers() {
        $result = $this->db->query("SELECT * FROM users");
        if ($result === false) {
            throw new Exception('Query failed: ' . $this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function usernameExists($username) {
        $stmt = $this->db->prepare("SELECT id FROM users WHERE username = ?");
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $this->db->error);
        }
        $stmt->bind_param("s", $username);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    private function sanitizeInput($input) {
        return htmlspecialchars(strip_tags($input));
    }
}