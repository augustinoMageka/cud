<?php

class Post{
	public function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function createPost($subj, $desc){
		//data from the inputs
		$this->subject = $subj;
		$this->description = $desc;

		//validation
		if(empty($this->subject) || empty($this->description)){
			header("Location: ../create.php?fields=empty");
			exit();
		}else{
			$date = date('Y-m-d H:i:s');
			//query to insert data
			$sql = "INSERT INTO posts (subject, description, created_at, updated_at) VALUES (:sub, :des, :cr, :up)";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['sub' => $this->subject, 'des' => $this->description, 'cr'=>$date, 'up'=>$date]);
		}
	}

	public function readAll(){
		//query to select all
		$sql = "SELECT * FROM posts ORDER BY created_at DESC";
		$results = $this->conn->query($sql);
		if($results->rowCount() == 0){
			return null;
		}else{
			$posts = $results->fetchAll(PDO::FETCH_OBJ);
			return $posts;
		}
	}

	public function readSingle($id){
		//query to select one post
		$sql = "SELECT * FROM posts WHERE id=:id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id' => $id]);
		$post = $stmt->fetch(PDO::FETCH_OBJ);
		return $post;
	}

	public function delete($id){
		$sql = "DELETE FROM posts WHERE id=:id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
	}

	public function update($id, $subject, $description){
		$date = date('Y-m-d H:i:s');
		$sql = "UPDATE posts SET subject=:sub, description=:des, updated_at=:up WHERE id=:id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['sub' => $subject, 'des' => $description, 'id' => $id, 'up'=>$date]);
	}
}