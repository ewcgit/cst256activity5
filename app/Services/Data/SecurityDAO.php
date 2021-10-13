<?php

namespace app\Services\Data;

// Necessary for application functionality.
use Illuminate\Support\Facades\Log;
use App\Models\userModel;
use App\Services\Utility\ILogger;
use app\Services\Utility\MyLogger1;
use app\Services\Utility\MyLogger2;
use app\Services\Business\SecurityService;
use App\Models\usertableModel;
use App\Services\Data\UserTableDAO;

class SecurityDAO{
    // For database connections and the queries.
    public $db;
    private $con;
    public $ilogger;
    public $ilogger2;
    public $users1;
    public $users2;
    public function __construct(){ // A constructor.
        $this->con = mysqli_connect("localhost", "root", "", "activity2"); // The default XAMPP settings.
    }
    
    public function findAllUsers(){
        $this->users1 = new UserTableDAO();
        return $this->users1->index();
    }
    
    public function findUserByID($id){
        $this->users2 = new UserTableDAO();
        return $this->users2->show($id);
    }
    
    public function findByUser(UserModel $validation){
        $this->ilogger2 = MyLogger2::getLogger();
        $this->ilogger2 = MyLogger2::info();
        Log::info("Entering SecurityDAO::findByUser()");
        $this->ilogger = MyLogger1::info();
        // Database return.
        $this->db = "select USERNAME, PASSWORD from users where USERNAME = '{$validation->getUsername()}' and Password = '{$validation->getPassword()}'";
        $query = mysqli_query($this->con, $this->db);
        if(mysqli_num_rows($query) > 0){
            mysqli_free_result($query);
            mysqli_close($this->con);
            $this->ilogger2 = MyLogger2::warning();
            Log::info("Exiting SecurityDAO::findByUser()");
            $this->ilogger = MyLogger1::warning();
            return true; // Successful run.
        }
        else{
            mysqli_free_result($query);
            mysqli_close($this->con);
            $this->ilogger2 = MyLogger2::error();
            Log::info("Exiting SecurityDAO::findByUser()");
            $this->ilogger = MyLogger1::error();
            return false; // Failed run.
            }
        }
}
?>