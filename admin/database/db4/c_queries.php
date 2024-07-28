<?php
require_once 'database.php';
class Query extends Database
{
    //table name
    protected $tableName = 'c_master';
    /*function is used to add record
    @param array $data
    @return int $lastInsertedId
    */
    public function add($data){
        if (!empty($data)) {
            $fields = $placeholders = [];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholders[] = ":{$field}";
            }
        }
        $sql = "insert into {$this->tableName} (" . implode(',', $fields) . ") values (" . implode(',', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
            $this->conn->rollback();
        }
    }

    public function update($data, $id)
    {
        if (!empty($data)) {
            $fields = "";
            $x = 1;
            $fieldscount = count($data);
            foreach ($data as $field => $value) {
                $fields .= "{$field}=:{$field}";
                if ($x < $fieldscount) {
                    $fields .= ", ";
                }
                $x++;
            }
        }
        $sql = "update {$this->tableName} set {$fields} where c_id=:id";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $data['id'] = $id;
            $stmt->execute($data);
            $this->conn->commit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }

    //delete row using id
    public function deleteRow($id)
    {
        $sql = "delete from {$this->tableName} where c_id=:id";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute([":id" => $id]);
            if ($stmt->rowCount() > 0) {
                return true;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    /*function is used to get records
    @param int $stmt
    @param int $limit
    @return int $lastInsertedId*/
    public function getRows($start = 0, $limit = 4){
        $sql = "select * from {$this->tableName} order by c_id desc limit {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

    public function getRowsAll(){
        $sql = "select * from {$this->tableName} order by c_id ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }
    //count number of records
    public function getCount()
    {
        $sql = "select count(*) as pcount from {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }

    /*function is used to get single record based on the column value
    @param string $fields
    @param any $value
    @retunr array $result*/
    public function getRow($field, $value)
    {
        $sql = "select * from {$this->tableName} where {$field}=:{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":{$field}" => $value]);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;
    }

    //
    public function searchPlayer($searchText, $start = 0, $limit = 4)
    {
        $sql = "select * from {$this->tableName} where c_question like :search or c_id like :search or c_option1 like :search or c_option2 like :search or c_option3 like :search or c_option4 like :search or c_answer like :search order by c_ID desc limit {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":search" => "%{$searchText}%"]);
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

    /* function is used to upload file
    @param array $file
    return string $newFileName */
    public function uploadPhoto($file)
    {
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $allowedExtn = ["jpg", "png", "gif", "jpeg"];
            if (in_array($fileExtension, $allowedExtn)) {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {
                    return $newFileName;
                }
            }
        }
    }
}
