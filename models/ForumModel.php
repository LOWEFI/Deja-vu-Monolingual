<?php

// models/ForumModel.php

class ForumModel extends BaseModel
{
    public function get_category($category_id)
    {
        $params = ['category_id' => $category_id];

        $sql = "SELECT * FROM categories WHERE category_id = :category_id LIMIT 1";

        $statement = $this->run_query($sql, $params);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function get_categories()
    {
        $sql = "SELECT * FROM categories ORDER BY category_priority ASC";

        $statement = $this->run_query($sql);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}

