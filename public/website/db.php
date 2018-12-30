<?php
class Database
{
  protected $servername;
  protected $username;
  protected $password;
  protected $database;

  public function __construct($servername,$username,$password,$database)
  {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
  }

  public function userCustomerFindOrCreate($user_data)
  {

    $sql = "SELECT * FROM user_customers WHERE email ='".$user_data['email']."'";
    $conn = new mysqli($this->servername,$this->username,$this->password,$this->database) or die("Database connection failed: ".mysqli_connect_error());
    $result = $conn->query($sql);
    $user_customer = $result->fetch_assoc();
    if(count($user_customer))//if the user exists
    {
        $conn->close();
        return $user_customer;
    }
    else//create new user and retun details
    {
      $create = "INSERT INTO user_customers (user_id,first_name,last_name,email,phone,address,created_at,updated_at) VALUES (".$user_data['user_id'].",'".$user_data['first_name']."','".$user_data['last_name']."','".$user_data['email']."','".$user_data['phone']."','".$user_data['address']."',NOW(),NOW())";
      if($conn->query($create))
      {
        $new_user_customer_id = $conn->insert_id;
        $get_new_user_customer = "SELECT * FROM user_customers WHERE id=".$new_user_customer_id."";
        $result = $conn->query($get_new_user_customer);
        $new_user_customer = $result->fetch_assoc();
        $conn->close();
        return $new_user_customer;
      }
    }
    return FALSE;
  }

  public function recordSale($user_customers_id,$shopping_cart)
  {
    $conn = new mysqli($this->servername,$this->username,$this->password,$this->database) or die("Database connection failed: ".mysqli_connect_error());
    foreach ($shopping_cart as $item => $id)
    {
      if($item === 'user' || $item === 'amount'){continue;}
      $create = "INSERT INTO user_sales (user_customers_id,user_items_id,payment_status,created_at,updated_at) VALUES (".$user_customers_id.",'".$id."','unpaid',NOW(),NOW())";
      $conn->query($create);
    }
    $conn->close();
  }

  public function get_record($table,$id)
  {
    $conn = new mysqli($this->servername,$this->username,$this->password,$this->database) or die("Database connection failed: ".mysqli_connect_error());
    $sql = "SELECT * FROM ".$table." where id = ".$id."";
    $result = $conn->query($sql);
    $user_item = $result->fetch_assoc();
    $conn->close();
    return $user_item;
  }
  public function get_table($table,$order_field,$order,$max_rows='')
  {
    if ($max_rows!='') {
      $max_rows=" LIMIT ".$max_rows;
    }
    $conn = new mysqli($this->servername,$this->username,$this->password,$this->database) or die("Database connection failed: ".mysqli_connect_error());
    $sql = "SELECT * FROM ".$table." ORDER BY ".$order_field." ".$order.$max_rows."";
    $result =$conn->query($sql);
    $items=array();
    while($row = $result->fetch_assoc()){
      $items [] = $row;
    }
    return $items;
  }
}
