<?php
class CompanyInfo
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Mendapatkan semua informasi perusahaan
    public function getAllCompanyInfo()
    {
        $stmt = $this->pdo->query("SELECT * FROM company_info");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mendapatkan informasi perusahaan berdasarkan ID
    public function getCompanyInfoById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM company_info WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Menambahkan informasi perusahaan baru
    public function addCompanyInfo($name, $description, $email, $phone, $address, $is_active = 1)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO company_info (name, description, email, phone, address, is_active) VALUES (?, ?, ?, ?, ?, ?)"
        );
        return $stmt->execute([$name, $description, $email, $phone, $address, $is_active]);
    }

    // Memperbarui informasi perusahaan
    public function updateCompanyInfo($id, $name, $description, $email, $phone, $address, $is_active)
    {
        $stmt = $this->pdo->prepare(
            "UPDATE company_info SET name = ?, description = ?, email = ?, phone = ?, address = ?, is_active = ? WHERE id = ?"
        );
        return $stmt->execute([$name, $description, $email, $phone, $address, $is_active, $id]);
    }

    // Menghapus informasi perusahaan berdasarkan ID
    public function deleteCompanyInfo($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM company_info WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
